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

Route::get('/', function()
{
	return View::make('frontend.home');
});

// Route::get('admin', function()
// {
// 	return View::make('layouts/admin');
// });

// Route::resource('students', array('as' => 'students' , 'uses' => 'StudentsController@index'));
Route::group(array( 'prefix' => 'admin'), function()
	{
Route::get('/', array('uses' => 'AdminController@index'));



Route::group(array('prefix' => 'students'), function()
{


		Route::get('/', array('as' => 'students', 'uses' => 'StudentsController@index'));
		Route::get('create', array('as' => 'create', 'uses' => 'StudentsController@create'));
		Route::post('create', 'StudentsController@postCreate');
		Route::get('{studentId}/edit', array('as' => 'update/student', 'uses' => 'StudentsController@edit'));
		Route::post('{studentId}/edit', 'StudentsController@postEdit');
		Route::get('{studentId}/delete', array('as' => 'delete/student', 'uses' => 'StudentsController@getDelete'));
		Route::get('{studentId}/restore', array('as' => 'restore/student', 'uses' => 'StudentsController@getRestore'));
});
	});