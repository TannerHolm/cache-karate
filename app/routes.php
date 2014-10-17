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

Route::get('student', function()
{
    return Student::all();
});

Route::post('student', function()
{
    return Student::create(Input::all());
});


// Route::get('/students', function()
// {
// 	return View::make('frontend.students.index');
// });
Route::get('/students', array( 'uses' => 'PostsController@show'));

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
		Route::get('{studentId}/show', 'StudentsController@show');
		Route::get('{studentId}/edit', array('as' => 'update/student', 'uses' => 'StudentsController@edit'));
		Route::post('{studentId}/edit', 'StudentsController@postEdit');
		Route::get('{studentId}/delete', array('as' => 'delete/student', 'uses' => 'StudentsController@getDelete'));
		Route::get('{studentId}/restore', array('as' => 'restore/student', 'uses' => 'StudentsController@getRestore'));
});

Route::group(array('prefix' => 'posts'), function()
{


		Route::get('/', array('as' => 'posts', 'uses' => 'PostsController@index'));
		Route::get('create', array('as' => 'create', 'uses' => 'PostsController@create'));
		Route::post('create', 'PostsController@postCreate');
		Route::get('{postId}/show', 'PostsController@show');
		Route::get('{postId}/edit', array('as' => 'update/posts', 'uses' => 'PostsController@edit'));
		Route::post('{postId}/edit', 'PostsController@postEdit');
		Route::get('{postId}/delete', array('as' => 'delete/posts', 'uses' => 'PostsController@destroy'));
		Route::get('{postId}/restore', array('as' => 'restore/student', 'uses' => 'PostsController@getRestore'));
});

Route::group(array('prefix' => 'spotlight'), function()
{
		Route::get('/', array('as' => 'spotlight', 'uses' => 'SpotlightsController@create'));
		Route::post('/', array('as' => 'spotlight', 'uses' => 'SpotlightsController@postCreate'));
});




		// Route::resource('posts', 'PostsController');
	});

// Route::get('signin', array('as' => 'signin', 'uses' => 'adminController@getSignin'));
// Route::post('signin', 'adminController@postSignin');

// Route::group(array('prefix' => 'account'), function()
// {

// 	# Account Dashboard
// 	Route::get('/', array('as' => 'account', 'uses' => 'adminController@account'));

// });
Blade::setContentTags('[[', ']]'); // for variables and all things Blade
Blade::setEscapedContentTags('[[[', ']]]'); // for escaped data