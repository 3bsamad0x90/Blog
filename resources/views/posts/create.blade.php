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
    <div class="form-group">
        <label for="desc"><b>Description</b></label>
        <textarea id="desc" name="description" class="form-control" ></textarea>
    </div>
    {{-- <div class="form-group mt-4">
        <label for="postedBy"><b>Posted By</b></label>
        <input type="text" class="form-control" id="postedBy" name="posted_by">
    </div> --}}
    <div class="input-group mb-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="posted_by">Posted By</label>
        </div>
        <select class="custom-select" id="posted_by" name="user_id">
            <option selected>Choose...</option>
            @foreach ($users as $user)
            <option value="{{ $user -> id }}">{{ $user -> name }}</option>
            @endforeach
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Create Post</button>
</form>
@endsection
