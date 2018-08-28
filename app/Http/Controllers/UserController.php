<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function showProfile()
{
  $value=Session::all();
print_r($value);


        //
    }

public function View()
{
    return View('Newsfeed');
}
public function admin()
{
    return View('Admin');
}


}