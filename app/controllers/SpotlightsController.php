<?php

class SpotlightsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /spotlights
	 *
	 * @return Response
	 */
	public function index()
	{
		$spotlight = Spotlight::all();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /spotlights/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.spotlight');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /spotlights
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /spotlights/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		$spotlights = Spotlight::all();

		$spotlight = DB::table('spotlights')->orderBy('created_at', 'desc')->first();

		return View::make('frontend.students.index', compact('spotlights'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /spotlights/{id}/edit
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
	 * PUT /spotlights/{id}
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
	 * DELETE /spotlights/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

public function postCreate()
{
{
		// Declare the rules for the form validation
		$rules = array(
			'title'   => 'required|min:3',
			'content' => 'required|min:3',
		);

		// Create a new validator instance from our validation rules
		$validator = Validator::make(Input::all(), $rules);

		// If validation fails, we'll exit the operation now.
		// if ($validator->fails())
		// {
			// Ooops.. something went wrong
			// return Redirect::back()->withInput()->withErrors($validator);
		// }

		// Create a new blog spotlight
		$spotlight = new spotlight;
				// Update the blog spotlight data
		$spotlight->name                  = e(Input::get('name'));
		$spotlight->content          		= e(Input::get('content'));

		// Was the blog spotlight created?
		if($spotlight->save())
		{
			// Redirect to the new blog post page
			return Redirect::to("admin/posts")->with('success');
		}

		// Redirect to the blog post create page
		return Redirect::to('admin/posts')->with('error');
	}


	return View::make('posts');
}



}