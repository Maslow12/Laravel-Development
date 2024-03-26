<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/_debugbar/assets/stylesheets', [
    'as' => 'debugbar-css',
    'uses' => '\Barryvdh\Debugbar\Controllers\AssetController@css'
]);

Route::get('/_debugbar/assets/javascript', [
    'as' => 'debugbar-js',
    'uses' => '\Barryvdh\Debugbar\Controllers\AssetController@js'
]);

Route::controller(HomeController::class)->group(function(){
    Route::get("/", 'index');
    Route::get('sign-in','sign_in');
});

Route::controller(AuthController::class)->group(function(){
    Route::post("login", 'login')->name('login');
    Route::post('logout','logout')->name('logout');
    Route::post('register','register')->name('register');
    //Route::get('register','register')->name('register');
});