<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});
Route::view('home','home');
Route::view('about','about2');
Route::get('admin',function (){
    return view('admin.login');
});
Route::get('user',[UserController::class,'showUser']);
Route::get('user/{name}',[UserController::class,'getUserName']);
#Route::get('about',[AboutController::class,'aboutHome']);
Route::view('userform','userform');
Route::post('adduser',[FormController::class,'addUser']);
