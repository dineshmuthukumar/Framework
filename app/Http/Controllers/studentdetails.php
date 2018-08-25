<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPost;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Validator;
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
    if(!$State)
    {
    	return redirect('List');
    
    }
DB::table('student')->insert(
    ['Student_name' => $Student_name,'Email_id'=>$Email_id,'City'=>$City,'State'=>$State]);
    return redirect('List'); 
}
public function check(StoreBlogPost $request)
{
	$validated = $request->validated();

    	dd($validatedData);
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
	$table= DB::table('student')->select('id','Student_name','Email_id','City','State')->where('id', $id)->first();

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