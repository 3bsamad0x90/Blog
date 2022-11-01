@extends('layouts/app')
@section('title')
    Blog | Edit
@endsection

@section('content')
<form class="container" method="POST" action="{{route('posts.update',['id'=> $post->id])}}">
    @csrf
    @method('put')
    <div class="form-group mt-3">
        <label for="title"><b>Title</b></label>
        <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
    </div>
    <div class="form-group mt-3">
        <label for="title"><b>Posted By</b></label>
        <input type="text" class="form-control" id="title" name="posted_by" value="{{$post->posted_by}}">
    </div>
    <div class="form-group">
        <label for="desc"><b>Description</b></label>
        <textarea id="desc" name="description" class="form-control" >{{$post->description}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create Post</button>
</form>
@endsection
