<?php

namespace App\Http\Controllers\Admin;

use App\Blog\Models\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$posts = Post::all();

		return view('admin.posts.index', compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$post = new Post;
		return view('admin.posts.create', ['post' => $post]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$post = Post::create($request->all());

		return response()->redirectToRoute('admin.posts.edit', ['id' => $post->id])
			->with([
				'notification' => [
					'title' => 'Great!',
					'message' =>'Post created correctly!',
					'type' => 'success',
					'dismiss' => 3
				]
			]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param Post $posts
	 *
	 * @return \Illuminate\Http\Response
	 *
	 */
	public function edit(Post $posts)
	{
		return view('admin.posts.edit', [
			'post' => $posts
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @param Post                      $posts
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Post $posts)
	{
		$posts->update($request->all());


	  return response()->redirectToRoute('admin.posts.edit', ['id' => $posts->id])
		  ->with([
			  'notification' => [
				  'title'   => 'Great!',
				  'message' => 'Post updated correctly!',
				  'type' => 'success',
				  'dismiss' => 3
			  ]
		  ]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 *
	 * @param Post $posts
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Post $posts)
	{
		$posts->delete();

		return response()->redirectToRoute('admin.posts.index')->with([
			'notification' => [
				'title'   => 'Ok!',
				'message' => 'Post deleted correctly!',
				'type'    => 'warning',
				'dismiss' => 4
			]
		]);
	}
}
