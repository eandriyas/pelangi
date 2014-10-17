<?php

class AdminPostsController extends \BaseController {

	/**
	 * Display a listing of posts
	 *
	 * @return Response
	 */
	public function posts(){
		// $posts = Post::all();
		$posts = Post::with('User')->paginate(20);
		return View::make('admin.posts.posts', compact('posts'));
	}
	public function category(){
		return View::make('admin.posts.category');
	}
	public function message(){
		return View::make('admin.posts.message');
	}
	public function user(){
		return View::make('admin.posts.user');
	}
	public function setting(){
		return View::make('admin.posts.setting');
	}

	public function index()
	{
		$posts = Post::all();

		return View::make('admin.posts.index', compact('posts'));
	}

	/**
	 * Show the form for creating a new post
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.posts.create');
	}

	/**
	 * Store a newly created post in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// print_r(Input::all());
		$validator = Validator::make($data = Input::all(), Post::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Post::create($data);

		return Redirect::route('admin.posts.posts');
	}

	/**
	 * Display the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);

		return View::make('admin.posts.show', compact('post'));
	}

	/**
	 * Show the form for editing the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::with('User')->find($id);
		$user = User::all();

		return View::make('admin.posts.edit', compact('post', 'user'));
	}

	/**
	 * Update the specified post in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// print_r($_POST);
		$post = Post::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Post::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$post->update($data);

		return Redirect::route('admin.posts.posts');
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

		return Redirect::route('admin.posts.posts');
	}

}
