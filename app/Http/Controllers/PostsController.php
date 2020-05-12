<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddPost;
use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddPost $request)
    {
        $post = new Posts();
        $post->content = $request->content;
        $post->user_id = \Auth::user()->id;
        $post->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Request $request, Posts $posts)
    {
        $id = $request->ID;
        if($id!==null && Posts::findorfail($id)->user_id!==\Auth::user()->id)abort('503','unauthorized action');
        return view('posts.add')->with([
                'ID' => $id,
                'value'=>($id!==null) ? Posts::findorfail($id)->content : '',
                'subStrPost' => ($id!==null) ?
                        substr(\App\Posts::findorfail($id)->content,0,10).'...' : null
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(AddPost $request, Posts $posts)
    {
        $post = $posts->findorfail($request->ID);
        $post->content = $request->content;
        $post->save();
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $posts)
    {
        //
    }
}
