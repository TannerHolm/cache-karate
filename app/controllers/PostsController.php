<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of posts
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();
		return View::make('posts.index', compact('posts'));
	}

	/**
	 * Show the form for creating a new post
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return View::make('posts.create');
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

		// Create a new blog post
		$post = new Post;
				// Update the blog post data
		$post->title            = e(Input::get('title'));
		// $post->slug             = e(Str::slug(Input::get('title')));
		$post->content          = e(Input::get('content'));
		// $post->meta_title       = e(Input::get('meta-title'));
		// $post->meta_description = e(Input::get('meta-description'));
		// $post->meta_keywords    = e(Input::get('meta-keywords'));
		// $post->user_id          = Sentry::getId();

		// Was the blog post created?
		if($post->save())
		{
			// Redirect to the new blog post page
			return Redirect::to("admin/posts")->with('success');
		}

		// Redirect to the blog post create page
		return Redirect::to('admin/posts')->with('error');
	}
}
	/**
	 * Store a newly created post in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Post::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Post::create($data);

		return Redirect::route('posts.index');
	}

	/**
	 * Display the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		// $post = Post::findOrFail($id)->first();

		$post = DB::table('posts')->orderBy('created_at', 'desc')->first();
		$spotlight = DB::table('spotlights')->orderBy('created_at', 'desc')->first();
		
		// var_dump($post->title);
		// var_dump($post->title);



		return View::make('frontend.students.index', compact('post', 'spotlight'));
	}

	/**
	 * Show the form for editing the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);

		return View::make('posts.edit', compact('post'));
	}





public function postEdit($postId = null)
	{
		// Check if the blog post exists
		if (is_null($post = Post::find($postId)))
		{
			// Redirect to the posts management page
			return Redirect::to('admin/posts')->with('error', Lang::get('admin/posts/message.does_not_exist'));
		}

		// Declare the rules for the form validation
		$rules = array(
			'title'   => 'required|min:3',
			'content' => 'required|min:3',
		);

		// Create a new validator instance from our validation rules
		$validator = Validator::make(Input::all(), $rules);

		// If validation fails, we'll exit the operation now.
		if ($validator->fails())
		{
			// Ooops.. something went wrong
			return Redirect::back()->withInput()->withErrors($validator);
		}

		// Update the blog post data
		$post->title            = e(Input::get('title'));
		// $post->slug             = e(Str::slug(Input::get('title')));
		$post->content          = e(Input::get('content'));
		// $post->meta_title       = e(Input::get('meta-title'));
		// $post->meta_description = e(Input::get('meta-description'));
		// $post->meta_keywords    = e(Input::get('meta-keywords'));

		// Was the blog post updated?
		if($post->save())
		{
			// Redirect to the new blog post page
			return Redirect::to("admin/posts/$postId/edit")->with('success', Lang::get('admin/posts/message.update.success'));
		}

		// Redirect to the posts post management page
		return Redirect::to("admin/posts/$postId/edit")->with('error', Lang::get('admin/posts/message.update.error'));
	}














	/**
	 * Update the specified post in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Post::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$post->update($data);

		return Redirect::route('posts.index');
	}

	/**
	 * Remove the specified post from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::destroy($id);

		return Redirect::route('posts');
	}


public function spotlight()
{
	return View::make('posts.spotlight');
}



}
