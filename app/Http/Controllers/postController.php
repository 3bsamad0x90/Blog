<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class postController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }
    public function show($id){
        $post = Post::findorFail($id);
        return view('posts.show', ['post' => $post]);
    }
    public function create(){
        return view('posts.create');
    }
    public function store(Request $request){
        $title = $request -> title;
        $posted_by = $request -> posted_by;
        $description = $request -> description;

        $post = new Post();
        $post->title = $title;
        $post->posted_by = $posted_by;
        $post->description = $description;
        $post->save();
        return redirect()->route('posts.index');
    }

    public function edit($id){
        $post = Post::findOrFail($id);
        return view('posts.edit', ['post'=>$post]);
    }
    public function update($id, Request $request){
        $post = Post::findOrFail($id);
        $post -> title       = $request -> title;
        $post -> posted_by   = $request -> posted_by;
        $post -> description = $request -> description;

        $post->save();
        return redirect()->route('posts.index');
    }
    public function destroy($id){
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index');
    }

}
