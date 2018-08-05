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

Route::get('/', function () {
    return view('welcome');
});

//hello world route 
Route::get('/helloworld', function()
{
	echo "hello world. THis is my route";
});

Route::get('/home/first', function()
{
	echo "this is first url";
});

Route::get('/home','HomeController@index');
Route::get('/second', 'HomeController@second');

Route::get('/display', 'HomeController@display');


