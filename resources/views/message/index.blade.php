@extends('layouts.app')
@section('content')
<form class="mt-3" method="post" action="{{route('contact.store')}}">
    @csrf
    <div class="form-group row">
        <label for="username" class="col-sm-2 col-form-label">User Name</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="username" name="username">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="email" name="email">
        </div>
    </div>
    <div class="form-group row">
        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="phone" name="phone">
        </div>
    </div>
    <div class="form-group row">
        <label for="message" class="col-sm-2 col-form-label">Message</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="message" name="message">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
        <input type="submit" class="btn btn-primary" value="Send Message">
        </div>
    </div>
</form>
@endsection
