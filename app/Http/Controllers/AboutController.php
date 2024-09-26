<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function aboutHome(){
        $users = ['amit','bittu','sittu'];
        return view('about',['a'=>$users]);
    }

}
