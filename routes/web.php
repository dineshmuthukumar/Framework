<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('dinesh/{id}', 'HelloWorldController@Index'); 

Route::get('Form','NewForm@Index'); 
Route::post('Formnew','NewForm@Formadd');


Route::get('New','BearDetails@View');
Route::post('Bear','BearDetails@Insert');

Route::get('fish','BearDetails@fish');

Route::get('Student','studentdetails@show'); #New Student Add
Route::post('studentForm','studentdetails@details');
Route::get('List','studentdetails@list'); #List the studentdetails
Route::get('update/{id}','studentdetails@select'); # Select  the student
Route::post('student','studentdetails@update');# update the Student
Route::get('delete/{id}','studentdetails@delete'); #delete the 

Route::get('mark/{id}','studentdetails@get');
Route::post('markinsert','studentdetails@markinsert');
Route::post('markupdate','studentdetails@markupdate');

Route::get('Ranklist','studentdetails@Max');

Route::post('Checkdata','studentdetails@check');# form used storeblog

Route::post('Check','studentdetails@store');

Route::get('Session','UserController@showProfile');

Route::get('NewsHome','UserController@View');#news home page
Route::get('admin','UserController@admin');# admin dashboard
Route::get('Register','UserController@Register');# user register
Route::post('User_register','UserController@Validation');
Route::get('login','UserController@Login');#user login
Route::post('User_Login','UserController@Logining');
Route::get('Forget_Password','UserController@Forget_password'); #forget password
Route::post('new_password','UserController@New_password'); #new password
Route::get('Change_password/{resetpassword_token}','UserController@Change_password');#change password in the forget password
Route::post('Reset_Forget_password','UserController@Reset_Forget_password');#update the reset forget password