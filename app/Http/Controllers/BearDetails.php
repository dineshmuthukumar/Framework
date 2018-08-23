<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Http\Controllers\Controller;


use App\models\Bears;
use App\models\fish;
use App\models\tree;
use App\models\picnics;

class BearDetails extends Controller
{
    public function View()
    {
    

        return view('Beardetail'); 
    }
    public function Insert()
    {
       echo $name=request()->name; #request
        echo $type=request()->type; 
        echo $danger_level=request()->danger_level;

//dd($request->all());

    $bear  = new Bears; #object creation

//$name=request()->name;
//echo $name;

$bear->name         = 'bala';
$bear->type         = 'killer';
$bear->danger_level = '5';
  // dd($bear->all());
    //$bear->save
  //$bear->destroy(); @delete the details
   //$bear->save();
    //bear->where('name', '=', 'jeya')->first();@condition wise display
    //dd($bearLa->all());
  $bears=Bears::firstOrCreate(array('type' =>'Lawly','name'=>'dinesh1'));  
  $bears->danger_level=5;
  $bears->save();
  $bearLawly = Bears::where('type', '=', 'Lawly')->first();
  $bearLawly->save();
//$b=Bears::destroy();
dd( $bear->all());    //$bear = Bear::find(1);


    }
    public function fish()
    {
        $fish  = new fish;
        //$fish->weight="10";
        //$fish->bear_id="6";
        //$fish->save();
        

        $adobot = Bears::where('name', '=', 'bala')->first(); 
        $fish = $adobot->fish;
      dd($adobot);

    }
    
}
