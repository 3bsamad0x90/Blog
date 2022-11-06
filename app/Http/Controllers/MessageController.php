<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    function index(){
        return view('message/index');
    }
    function store(Request $request){
        dd($request-> all());
    }
}
