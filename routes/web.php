<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/test', 'test');

Route::get('/about/{name}',function($name) {    
    return view('about',['name'=>$name]);   
 });