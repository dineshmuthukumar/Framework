<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Validator;
use DB;
use mail;


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
        return view('News/Login');
        echo "Emailid and Password incorrect";
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
DB::table('User_Details')->where('email_id','=',$Email_id)->update(['resetpassword_token'=>uniqid(),'resetpassword_created_at'=>$expire_stamp]);
$resetpassword_token=DB::table('User_Details')->where('email_id','=',$Email_id)->select('resetpassword_token')->first();
   $data['results']=$resetpassword_token;
    Mail::send('News.mail',function ($message) {
            $message->from('dineshmuthukumae.g@kenhike.com', 'Your request mail');

            $message->to('dineshmuthukumar448@gmail.com')->subject('Your Reminder!');
                                                                        });


    return view('News/Mail',$data);
}
}