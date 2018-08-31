<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Session;
use Validator;
use DB;
use Mail;


class AdminController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
public function admin()
{
    return View('News/Admin');
}
public function profile()
{
	return view('News/Admin/user_profile');
}
public function profile_update()
{   
$update_name=request()->Name;
$update_email=request()->feEmailAddres;
$update_pwd=request()->fePassword;
$token=request()->token;
DB::table('User_Details')->where('resetpassword_token','=',$token)->update(['name'=>$update_name,'email_id'=>$update_email,'password'=>md5($update_pwd)]);
return view('News/Admin/user_profile');
}

public function Reset_password()

{
	return view('News/Admin/Reset_password');
}
public function Reset_password_new(request $request)
{

	$validatedData = $request->validate([
		'Current_Password'=>'required',
        'New_password' => 'required|min:8',
        'Confirm_Password' => 'required_with:password|same:New_password|min:8'
            ]);
$token=request()->token;
$current_password=request()->Current_Password;
$New_password=request()->New_password;
DB::table('User_Details')->where('resetpassword_token','=',$token)->where('password','=',md5($current_password))->update(['password'=>md5($New_password)]);
return redirect('Reset_password')->with('success','Password changed Sucessfully!');	
}
public function usertable()
{

	$table=DB::table('User_Details')->get();
	$data['table']=$table;
	return view('News/Admin/table',$data);
}
}