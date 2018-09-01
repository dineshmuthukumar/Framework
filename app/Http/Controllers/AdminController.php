<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Session;
use Validator;
use DB;
use Mail;

use App\User;
use App\Role;



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
DB::table('users')->where('resetpassword_token','=',$token)->update(['name'=>$update_name,'email_id'=>$update_email,'password'=>md5($update_pwd)]);
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
DB::table('users')->where('resetpassword_token','=',$token)->where('password','=',md5($current_password))->update(['password'=>md5($New_password)]);
return redirect('Reset_password')->with('success','Password changed Sucessfully!');	
}
public function usertable()
{

	$table=DB::table('users')->get();
	$data['table']=$table;

	return view('News/Admin/table',$data);
}

public function create(request $request)
{

/*$Role_name=DB::table('roles')->where('name','=',$name)->select('id');
$role=$Role_name->id;
$User=User::find([3,4]);
$role->Users()->attach($User);
$role =new Role;
$role->id=3;
$role->Role_name='develepor';
$role->save();
$User=User::find([2]);
$role->Users()->attach($User);
return 'succes';*/

}

public function table($id)
{
$data=DB::table('users')->where('id','=',$id)->select('name','email_id','id')->first();

$value['data']=$data;

$role=DB::table('role_user')->where('user_id','=',$id)->select('Role_id')->first();
if(!$role)
{
	return view('News/Admin/User_details',$value);
}	
$role=$role->Role_id;
$new=DB::table('roles')->where('id','=',$role)->select('Role_name')->first();
return view('News/Admin/User_details',$value,['role'=>$new]);
}
public function New()
{

$role_name=request()->role;
$role=DB::table('roles')->where('Role_name','=',$role_name)->select('id')->first();
$role_id=$role->id;
$User_id=request()->User_id;
$table=DB::table('role_user')->where('User_id','=',$User_id)->get();
if(!$table)
{
	DB::table('role_user')->insert(['Role_id'=>$role_id,'User_id'=>$User_id]);
}
DB::table('role_user')->where('User_id','=',$User_id)->update(['Role_id'=>$role_id]);

return redirect('table');
}


}