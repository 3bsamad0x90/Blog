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
    <div class="form-group">
        <label for="desc"><b>Description</b></label>
        <textarea id="desc" name="description" class="form-control" >{{$post->description}}</textarea>
    </div>
    <div class="input-group mb-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="posted_by">Posted By</label>
        </div>
        <select class="custom-select" id="posted_by" name="user_id">
            <option selected>{{ $post->user->name }}</option>
            @foreach ($users as $user)
            <option value="{{ $user -> id }}">{{ $user -> name }}</option>
            @endforeach
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Create Post</button>
</form>
@endsection
