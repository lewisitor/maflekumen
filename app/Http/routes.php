<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Support\Facades\Mail;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/school_info','RouteController@school_info');
Route::get('/contact','RouteController@contact');
//Route::post('mail','RouteController@handleMail');
Route::auth();
Route::post('mail',
	function(){return view('errors.503');}
	);
Route::get('/home', 'HomeController@index');

Route::get('/email',function(){
	Mail::send('test', ['name'=>'Lewis Itor'],function($message){
	$message->to('itorlewis@gmail.com','Some Guy')
	->from('lewisitor@yahoo.com')->subject('welcome');
});
}

	);
