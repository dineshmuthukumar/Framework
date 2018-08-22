<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
//composer require josantonius/request;
use App\Http\Requests;
class NewForm extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function Index()
    {
    return view('Form');
    }

   Public function Formadd()
{

    //foreach ($request as $key => $value) {
        # code...
    //s}
    $Firstname=request()->Firstname;
    $Lastname=request()->Lastname;
    $gender=request()->gender;
    $borndate=request()->borndate;
    $Address=request()->Address;
    $city=request()->City;
    $State=request()->State;
    $country=request()->country;
    $zipcode=request()->zipcode;
    $Email_id=request()->emailid;
    $mobileno=request()->mobileno;
 //echo $Firstname;
 //$input::all();
   // dd($req->all());
    
    return view('View',['Firstname'=>$Firstname,'Lastname'=>$Lastname,'gender'=>$gender,'borndate'=>$borndate,'Address'=>$Address,'city'=>$city,'State'=>$State,'country'=>$country,'zipcode'=>$zipcode,'Emailid'=>$Email_id,'mobileno'=>$mobileno]);


}


}
