<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::post('/takephoto', 'RegisterController@savedata');

Route::get('/getid/{id?}', 'RegisterController@getid');
Route::get('/report/id', 'RegisterController@report_id');
Route::get('/imgcheck', 'RegisterController@showimg');
Route::get('report/student/pok' , 'RegisterController@report_student_pok');
Route::get('report/student/inter' , 'RegisterController@report_student_inter');
Route::get('/', function() {
	return View::make('form');
});


Route::get('/check', function() {

	return View::make('check');
});

Route::post('/group', 'RegisterController@writeimg');