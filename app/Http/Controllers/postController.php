<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class postController extends Controller
{
    public function index(){
        $posts = Post::simplePaginate(5);
        return view('posts.index', ['posts' => $posts]);
    }
    public function show($id){
        $post = Post::findorFail($id);
        return view('posts.show', ['post' => $post]);
    }
    public function create(){
        $users = User::all();

        return view('posts.create', ['users' => $users]);
    }
    public function store(CreateRequest $request){
        // $request -> validate([
        //     'title' => ['required','min:4','max:20'],
        //     'user_id' => ['required','numeric'],
        //     'description' => ['required','min:10','max:255']
        // ],[
        //     'title.required' => '*this field is required',
        //     'title.min' => '*Insert more characters',
        //     'title.max' => '*Remove some characters',
        //     'user_id.numeric' => '*Select a Post\'s creator',
        //     'description.required' => '*this field is required',
        //     'description.min' => '*Insert more characters',
        //     'description.max' => '*Remove some characters',
        // ]);
        $title = $request -> title;
        $user_id = $request -> user_id;
        $description = $request -> description;

        $post = new Post();
        $post->title = $title;
        $post->user_id = $user_id;
        $post->description = $description;
        $post->save();
        return redirect()->route('posts.index');
    }

    public function edit($id){
        $users = User::all();
        $post = Post::findOrFail($id);
        return view('posts.edit', [
            'post'=>$post ,
            'users'=>$users
        ]);
    }
    public function update($id, CreateRequest $request){
        $post = Post::findOrFail($id);
        $post -> title       = $request -> title;
        $post -> user_id   = $request -> user_id;
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
