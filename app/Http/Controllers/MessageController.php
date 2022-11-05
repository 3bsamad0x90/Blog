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
    public function getMessage() {
        $msg = "This is a simple message.";
        return response()->json(array('msg'=> $msg), 200);
     }
}
?>
