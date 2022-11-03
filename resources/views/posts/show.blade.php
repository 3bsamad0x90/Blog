@extends('layouts.app')
@section('title')
    Blog | Show Post
@endsection

@section("content")
    <div class="card mt-2">
        <h5 class="card-header">Post</h5>
        <div class="card-body">
            <p class="card-title"><b>Title:</b> {{$post -> title}}</p>
            <p class="card-title">
                <b>Description:</b> {{$post -> description}}
            </p>
        </div>
    </div>
    <div class="card mt-2">
        <h5 class="card-header">Post By</h5>
        <div class="card-body">
            <p class="card-title"><b>Name:</b> {{$post -> title}}</p>
            <p class="card-title"><b>Email:</b> {{$post -> title}}</p>
            <p class="card-title">
                {{-- <b>Created at:</b> {{$post->created_at -> toDayDateTimeString()}} --}}
                <b>Created at:</b> {{$post->created_at->format('l jS \of F Y h:i:s A')}}
            </p>
        </div>
    </div>
@endsection("content")

