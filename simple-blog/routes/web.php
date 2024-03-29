<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

/*Route::get('_debugbar/assets/stylesheets', [
    'as' => 'debugbar-css',
    'uses' => '\Barryvdh\Debugbar\Controllers\AssetController@css'
]);

Route::get('_debugbar/assets/javascript', [
    'as' => 'debugbar-js',
    'uses' => '\Barryvdh\Debugbar\Controllers\AssetController@js'
]);*/

Route::controller(HomeController::class)->group(function(){
    Route::get("/", 'index');
    Route::get('sign-in','sign_in')->name("sign-in");
});

Route::controller(AuthController::class)->group(function(){
        Route::get('logout','logout')->name('logout');
        Route::post("login", 'login')->name('login');
        Route::get('register','register')->name('register');
        Route::create('create/user/','create-user')->name('create-user');
});

Route::controller(PostController::class)->group(function(){
        Route::get('posts','retrieve')->name("posts");
        Route::post('posts', 'create')->name("create_posts");
        //Route::post('post/update/{id}','update')->name('update');
        //Route::post('post/delete/{id}','delete')->name('delete');
});