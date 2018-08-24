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


//<form method="POST" action="/">
//</form>



Route::get('Form','NewForm@Index'); 
Route::post('Formnew','NewForm@Formadd');


Route::get('New','BearDetails@View');
Route::post('Bear','BearDetails@Insert');

Route::get('fish','BearDetails@fish');

Route::get('Student','studentdetails@show');
Route::post('studentForm','studentdetails@details');
Route::get('List','studentdetails@list');
Route::get('update/{id}','studentdetails@select');
Route::post('student','studentdetails@update');
Route::get('delete/{id}','studentdetails@delete');

Route::get('mark/{id}','studentdetails@get');
Route::post('markinsert','studentdetails@markinsert');
Route::post('markupdate','studentdetails@markupdate');


