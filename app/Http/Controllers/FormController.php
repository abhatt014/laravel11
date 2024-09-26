<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class formController extends Controller
{
 function addUser(Request $request){
    $request->validate([
        'username'=>'required | min:3 | max:10',
        'email'=>'required | email',
        'skill'=>'required'    
        
     ]);
    return $request;
    // echo $request->username;
    // echo $request->email;
    // echo $request->city; 
    //echo "Add user function";
 }
    //
}
