<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function showUser(){
        return view('showuser');
        //return "this is usercontroller->getusername function";
    }
    function aboutUser(){
        return "this is usercontroller->aboutuser function";
    }    
    function getUserName($name){
        return view('getusername',['name'=>$name]);

        return "Controller argument = $name";
    }  
    #
}
