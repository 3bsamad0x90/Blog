@extends('layouts/app')
@section('title')
    Blog | Create Post
@endsection
@section('content')
<form class="container" method="POST" action="{{route('posts.store')}}">
    @csrf
    <div class="form-group mt-2">
        <label for="title"><b>Title</b></label>
        <input type="text" class="form-control mb-1 @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
        @error('title')
            <div class="alert alert-danger">{{ $errors->first('title') }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="desc"><b>Description</b></label>
        <textarea id="desc" name="description" class="form-control mb-1 @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
        @error('description')
        <div class="alert alert-danger">{{ $errors->first('description') }}</div>
        @enderror
    </div>
    <div class="input-group mb-2">
        <div class="input-group-prepend">
            <label class="input-group-text" for="posted_by">Posted By</label>
        </div>
        <select class="custom-select @error('user_id') is-invalid @enderror" id="posted_by" name="user_id">
            <option selected>Choose...</option>
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
