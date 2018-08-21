<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\User;
use App\Http\Controllers\Controller;

class HelloWorldController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function Index($id)
    {
    return view('Hello',['id'=>$id]);
    }
}
