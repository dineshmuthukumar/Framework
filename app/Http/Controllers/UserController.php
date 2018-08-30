<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Validator;
use DB;
use Mail;


class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
public function View()
{
    return View('News/Newsfeed');
}
public function admin()
{
    return View('News/Admin');
}
public function Register()
{
    return View('News/Register'); 
}
public function Validation(Request $request)
{
   $validator = Validator::make($request->all(),[
        'name' => 'required|max:255',
        'Email_id' => 'required',
        'Password'=>'required|min:8',
        'Confirm_Password'=>'required_with:password|same:Password|min:8'
    ]);
if ($validator->fails()) {
            return redirect('Register')
                        ->withErrors($validator)
                        ->withInput();
        }
    $name=request()->name;
    $Email_id=request()->Email_id;
    $Password=request()->Password;


    DB::table('User_Details')->insert(
    ['name' => $name,'email_id'=>$Email_id,'password'=>md5($Password)]);
 
   return redirect('NewsHome');
}
public function Login()
{
    return view('News/Login');
}
public function Logining()
{
   $Email_id=request()->Emailid;
    $password=request()->password;
    $Login=DB::table('User_Details')->select('name','email_id','password')->where('email_id','=',$Email_id)->where("password", "=", md5($password))->first();
    if(!$Login)
    {
        return redirect('login')->with('success','Email_id and password incorrect!');
    }
    return View('News/Admin');

}
public function Forget_password()
{
    return view('News/forget');
}

public function New_password()
{
    
 $Email_id=request()->Forget_Emailid;

$expire_stamp = date('Y-m-d h:i:s', strtotime("+10 min"));

$Email=DB::table('User_Details')->where('email_id','=',$Email_id)->update(['resetpassword_token'=>uniqid(),'resetpassword_created_at'=>$expire_stamp]);
if(!empty($Email))
{
$resetpassword_token=DB::table('User_Details')->where('email_id','=',$Email_id)->select('resetpassword_token')->first();
   
   $data['resetpassword_token']=$resetpassword_token;
    
    Mail::send('News.mail',['resetpassword_token' => $resetpassword_token],function ($message) {
       
        $Email_id=request()->Forget_Emailid;
            
            $message->from('dineshmuthukumar@yopmail.net');

            $message->to($Email_id)->subject('Forget Password Notification');                                                       
             
              });
    return redirect('login');
  }
  return redirect('login')->with('success','invaild emailid Please go to the Register page!');
}
public function Change_password($resetpassword_token)
{
   
    $current_date=date('Y-m-d h:i:s');
    $database_token=DB::table('User_Details')->where('resetpassword_token','=',$resetpassword_token)->select('resetpassword_token')->first();

 if(!empty($database_token))
{
     $resetpassword_token=DB::table('User_Details')->where('resetpassword_token','=',$resetpassword_token)->select('resetpassword_created_at','resetpassword_token')->first();

      $resetpassword_created=$resetpassword_token->resetpassword_created_at;

     $token['resetpassword_token']=$resetpassword_token;

   if (strtotime($resetpassword_created) >= strtotime($current_date))
    {
        return view('News/reset',$token);
     }
         return redirect('login')->with('success','Link Was Exp Please Go to Forget Password Page');
}
    return redirect('login')->with('success','Link Was not vaild Please Go to Forget Password Page!!');
}
public function Reset_Forget_password(request $request)
{
        $validatedData = $request->validate([
        'New_password' => 'required|min:8',
        'New_Confirm_password' => 'required_with:password|same:New_password|min:8',
            ]);

            $resetpassword_token=request()->token;
  
     $New_password=request()->New_password;

    DB::table('User_Details')->where('resetpassword_token','=',$resetpassword_token)->update(['password'=>md5($New_password)]);
    return redirect('login')->with('success','password was changed successfully');
}
}