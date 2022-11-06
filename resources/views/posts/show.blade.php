@extends('layouts.app')
@section("content")
    <div class="card mt-2">
            <h5 class="card-header">Post</h5>
            <div class="card-body">
                <h5 class="card-title">Id-: {{$post -> id}}</h5>
                <h5 class="card-title">Title-: {{$post -> title}}</h5>
                <h5 class="card-title">
                    Desc-: {{$post -> description}}
                </h5>
            </div>
        </div>
@endsection("content")

