<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/', function () {
    return view('welcome');
});

Route::controller(UserController::class)->group(function(){
    Route::get('users', 'index');
    Route::put('users/{id}','update');
    Route::delete('users/{id}','destroy');
    Route::get('my/user','my_user');
});

Route::controller(AuthController::class)->group(function(){
    Route::post('auth/login', 'login');
    Route::post('auth/register', 'register');
    Route::post('auth/logout', 'logout');
    Route::post('auth/refresh', 'refresh');
});
