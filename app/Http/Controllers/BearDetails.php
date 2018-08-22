<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Http\Controllers\Controller;


use App\models\Bears;

class BearDetails extends Controller
{
    public function View()
    {
    

        return view('Beardetail');
    }
    public function Insert()
    {
        echo $name=request()->name;
        echo $type=request()->type;
        echo $danger_level=request()->danger_level;
//dd($request->all());

    $bear  = new Bears;

//$name=request()->name;
//echo $name;

    $bear->name         = $name;
    $bear->type         = $type;
    $bear->danger_level = $danger_level;
  // dd($bear->all());
    $bear->save();
    dd($bear->all());
    //$bear = Bear::find(1);


    }
    
}
