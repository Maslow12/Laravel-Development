<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\UnloggeduserMiddleware;

Route::get('/', function () {
    return view('home/index');
})->name("home")->middleware(AuthMiddleware::class);

Route::controller(ChatController::class)->group(function () {
    Route::get('chat/index', 'index')->name('chat')->middleware(AuthMiddleware::class);
});

Route::controller(AuthController::class)->group(function () {
    Route::post('auth/login', 'login')->name('login-submit')->middleware(UnloggeduserMiddleware::class);
    Route::get('auth/login', 'index')->name('login-index')->middleware(UnloggeduserMiddleware::class);
    Route::get('auth/register', 'registerIndex')->name('register-index')->middleware(UnloggeduserMiddleware::class);
    Route::post('auth/register', 'register')->name('register-submit')->middleware(UnloggeduserMiddleware::class);
    Route::get('auth/logout', 'logout')->name('logout');
});
