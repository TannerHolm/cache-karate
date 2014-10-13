<?php

class AdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /admin
	 *
	 * @return Response
	 */
	public function __construct()
	{
		// Apply the admin auth filter
		// $this->beforeFilter('admin-auth');
	}


	public function index()
	{
		return View::make('admin/dashboard');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /admin/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /admin
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /admin/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /admin/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /admin/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /admin/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

		public function getSignin()
	{
		// Is the user logged in?
		if (Sentry::check())
		{
			return Redirect::route('account');
		}

		// Show the page
		return View::make('frontend.auth.signin');
	}

	// public function postSignin()
	// {
	// 	// Declare the rules for the form validation
	// 	$rules = array(
	// 		'email'    => 'required|email',
	// 		'password' => 'required|between:3,32',
	// 	);

	// 	// Create a new validator instance from our validation rules
	// 	$validator = Validator::make(Input::all(), $rules);

	// 	// If validation fails, we'll exit the operation now.
	// 	if ($validator->fails())
	// 	{
	// 		// Ooops.. something went wrong
	// 		return Redirect::back()->withInput()->withErrors($validator);
	// 	}

	// 	try
	// 	{
	// 		// Try to log the user in
	// 		Sentry::authenticate(Input::only('email', 'password'), Input::get('remember-me', 0));

	// 		// Get the page we were before
	// 		$redirect = Session::get('loginRedirect', 'account');

	// 		// Unset the page we were before from the session
	// 		Session::forget('loginRedirect');

	// 		// Redirect to the users page
	// 		return Redirect::to($redirect)->with('success', Lang::get('auth/message.signin.success'));
	// 	}
	// 	catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
	// 	{
	// 		$this->messageBag->add('email', Lang::get('auth/message.account_not_found'));
	// 	}
	// 	catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
	// 	{
	// 		$this->messageBag->add('email', Lang::get('auth/message.account_not_activated'));
	// 	}
	// 	catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
	// 	{
	// 		$this->messageBag->add('email', Lang::get('auth/message.account_suspended'));
	// 	}
	// 	catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
	// 	{
	// 		$this->messageBag->add('email', Lang::get('auth/message.account_banned'));
	// 	}

	// 	// Ooops.. something went wrong
	// 	return Redirect::back()->withInput()->withErrors($this->messageBag);
	// }

// public function account()
// {
// 	return Redirect::route('admin')
// }
}
