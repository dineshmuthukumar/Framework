<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPost;
use App\User;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Support\MessageBag;
use DB;
use Session;
class studentdetails extends Controller
{

	public function show()
	{
		return view('View');
	}
    public function details(Request $request)
    {
   //session()->flush();;
    //die;	
 //$request->session()->flash('status', 'Task was successful!');
  //$request->session()->flash('username', 'Dinesh');
   //$request->session()->flash('email', 'Dinesh@kenhike.com');
   //$request->session()->reflash(); 	
   //session(['username'=>'Dinesh','email'=>'Dinesh@kenhike.com']);
   
   //$request->session()->keep(['username', 'email']);

   echo session('status')."<br />";
   echo session('username')."<br/>";
   echo session('email');
     //$request->session()->reflash();

  /*  // $Student_name=request()->Student_name;
    //Session()->put('Student_Name',$Student_name);
     //Session()->get('Student_Name');
   //echo session()->pull('Student_name');

session()->put('Student_Name',request()->Student_name);
session()->put('Email_id',request()->Email_id);
    echo  session()->get('Student_Name');
    echo  session()->get('Email_id');
     //echo session()->pull('Student_Name');
   //. 
   echo session()->keep([]);
    //session()->flash();
     
     

    	//$data = $request->session()->all();
    	//print_r($data);
/*
    	
    	echo $Email_id=request()->Email_id;
    	echo $City=request()->City;
    	echo $State=request()->State;
    if(!$State)
    {
    	return redirect('List');
    
    }
DB::table('student')->insert(
    ['Student_name' => $Student_name,'Email_id'=>$Email_id,'City'=>$City,'State'=>$State]);
 
   return redirect('List');*/ 
}
public function check(StoreBlogPost $request)
{
	$validated = $request->validate();


    	dd($validatedData);
}
public function store (request $request)
{
	$validator = Validator::make($request->all(), [
 'Firstname'=> 'required|max:25',
'Lastname'=>'required|max:25',
'gender'=>'filled|required',
'borndate'=>'date_format:"dd-mm-yyyy"|required',
'Address'=>'required|max:30',
'City'=>'required',
'State'=>'nullable',
'country'=>'required|min:6',
'emailid'=>'required|email',
'mobileno'=>'Integer|min:10',
'Password'=>'required|min:8',
'Confirm_Password'=>'required_with:password|same:Password|min:8']);
	$validator->after(function ($validator) {
    if ($this->somethingElseIsInvalid()) {
        $validator->errors()->add('field', 'Something is wrong with this field!');
    }
});
	if ($validator->fails()) {
            return redirect('Form')
                        ->withErrors($validator)
                        ->withInput();
        }

}
public function list()
{
   $data=DB::table('student')->get();
 //dd($data);
    $student['data']=$data;
 //return view('list')->withStore($data);
    return view('list',$student); 
}
  public function select($id)
{
	$table= DB::table('User_de')->select('id','Student_name','Email_id','Password')->where("Email_id", "=",$Email_id)->where("Password", "=",$Password)->first();

	//dd($table);
	//dd($table);
	$details['table']=$table;
	return view('Edit',$details);

}
public function update()
{
	$id=request()->Student_id;
 $Student_name_update=request()->Student_rename;
 $Email_id_update=request()->Email_id_rename;
 $City_update=request()->City_rename;
 $State_update=request()->State_rename;
DB::table('student')->where('id', $id)->update(['Student_name'=>$Student_name_update,'Email_id'=>$Email_id_update,'City'=>$City_update,'State'=>$State_update]);
return redirect('List');
}
public function delete($id)
{
DB::table('student')->where('id', '=', $id)->delete();	
return redirect('List');
}

public function markadd($id)
{
	return view('mark',['id'=>$id]);
}
public function markinsert()
{ 
	$id=request()->Student_id;
	$Tamil=request()->Tamil_Mark;
	$English=request()->English_Mark;
	$Maths=request()->Maths_mark;
    $Socialscience=request()->SocialScience_Mark;
//dd($Socialscience);
	$total=$Tamil+$English+$Maths+$Socialscience;
//dd(request()->all());
	DB::table('studentmark')->insert(
    ['student_id'=>$id,'Tamil' => $Tamil,'English'=>$English,'Maths'=>$Maths,'Socialscience'=>$Socialscience,'Total'=>$total]);
    return redirect('List');
}
public function get($id)
{

$result= DB::table('studentmark')->where('student_id', $id)->select('id','student_id','Tamil','English','Maths','Socialscience','Total')->first();
$Student['results']=$result;
if(!$result)
{
	return view('mark',['id'=>$id]);
	
}

return view('Details',$Student);
}
public function markupdate()
{
	$id=request()->id;
	$Student_id=request()->Student_id;
	$Tamil_Mark_update=request()->Tamil_Mark_update;
	$English_Mark_update=request()->English_Mark_update;
	$Maths_mark_update=request()->Maths_mark_update;
	$SocialScience_Mark_update=request()->SocialScience_Mark_update;
	$Total=$Tamil_Mark_update+$English_Mark_update+$Maths_mark_update+$SocialScience_Mark_update;
	DB::table('studentmark')->where('id', $id)->update(
    ['student_id'=>$Student_id,'Tamil' => $Tamil_Mark_update,'English'=>$English_Mark_update,'Maths'=>$Maths_mark_update,'Socialscience'=>$SocialScience_Mark_update,'Total'=>$Total]);
 return redirect('List');
}
public function max()
{
	$order = DB::table('student')
            ->Join('studentmark', 'student.id', '=', 'studentmark.student_id')->orderby('Total','DESC')
            ->get();
      //echo $users;

	//$order = DB::table('studentmark')->orderby('Total','DESC')->get();
$Student['order']=$order;
return view('Rank',$Student);
//$tabledata= DB::table('studentmark')->select('student_id','Total')->get();
   // $studentdata=DB::table('studentmark')->select('student_id','Total')->where('id', 22)->first();
   // $allstudent['tabledata']=$tabledata;
    //$oneStudent['studentdata']=$studentdata;
    //return view('Marklist',);

    //$score_board_list = DB::table(DB::raw($subquery))->select('*', 'total', DB::raw('@r:=@r+1 as rank'), DB::raw('@l:=total'))->get();
	//dd($query);
}
}