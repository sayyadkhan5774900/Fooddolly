<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts =  Post::published()->paginate(6);

        return view('theme::blog.index',['posts' => $posts]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::findBySlug($slug);
        
        return view('theme::blog.show', ['post' => $post]);
    }
}
