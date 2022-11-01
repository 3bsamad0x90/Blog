@extends('layouts/app')
@section('title')
    Blog | Create Post
@endsection
@section('content')

<form class="container" method="POST" action="{{route('posts.store')}}">
    @csrf
    <div class="form-group mt-2">
        <label for="title"><b>Title</b></label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group mt-4">
        <label for="postedBy"><b>Posted By</b></label>
        <input type="text" class="form-control" id="postedBy" name="posted_by">
    </div>
    <div class="form-group">
        <label for="desc"><b>Description</b></label>
        <textarea id="desc" name="description" class="form-control" ></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create Post</button>
</form>
@endsection
