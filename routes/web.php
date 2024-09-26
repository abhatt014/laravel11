<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin',function (){
    return view('admin.login');
});
Route::get('user',[UserController::class,'showUser']);
Route::get('user/{name}',[UserController::class,'getUserName']);
Route::get('about',[AboutController::class,'aboutHome']);
Route::view('userform','userform');
