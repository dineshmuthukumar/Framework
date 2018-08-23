<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Http\Controllers\Controller;
use DB;


class studentdetails extends Controller
{

	public function show()
	{
		return view('View');
	}
    public function details()
    {
    	echo $Student_name=request()->Student_name;
    	echo $Email_id=request()->Email_id;
    	echo $City=request()->City;
    	echo $State=request()->State;
    DB::table('student')->insert(
    ['Student_name' => $Student_name,'Email_id'=>$Email_id,'City'=>$City,'State'=>$State]);
   //$table= DB::table('student')->where('id', 2)->update(['City'=>'Chennai']);
   //DB::table('student')->where('id', '=', 1)->delete();
    	//echo $table;
    	
   // $student=DB::table('student')->where('id', '=', 2)->get();


}
public function list()
{
 $data=DB::table('student')->get();
 //dd($data);
 $student['data']=$data;
 //return view('list')->withStore($data);
 return view('list',$student); 
}
/*public function update()
{
	DB::table('student') where('id', 1)update(['Student_name'=$Student_name_update,'Email_id'=>$Email_id_Update,'City'=>$City_update,'State'=>$State_update]);
}
public function delete()
{
DB::table('student')->where('id', '=', $id)->delete();	
}*/
}