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
        <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title" name="title" value="{{$post->title}}">
        @error('title')
        <div class="alert alert-danger">{{ $errors->first('title') }}</div>
    @enderror
    </div>
    <div class="form-group">
        <label for="desc"><b>Description</b></label>
        <textarea id="desc" name="description" class="form-control @error('description') is-invalid @enderror" >{{$post->description}}</textarea>
        @error('description')
        <div class="alert alert-danger">{{ $errors->first('description') }}</div>
        @enderror
    </div>
    <div class="input-group mb-2">
        <div class="input-group-prepend">
            <label class="input-group-text" for="posted_by">Posted By</label>
        </div>
        <select class="custom-select @error('user_id') is-invalid @enderror" id="posted_by" name="user_id">
            <option selected>{{ $post->user->name }}</option>
            @foreach ($users as $user)
            <option value="{{ $user -> id }}">{{ $user -> name }}</option>
            @endforeach
        </select>
    </div>
    @error('user_id')
    <div class="alert alert-danger">{{ $errors->first('user_id') }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Create Post</button>
</form>
@endsection
