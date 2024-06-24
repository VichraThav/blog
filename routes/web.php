<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/laravel', function () {
    return view('welcome');
});


Route::resource('/posts', PostController::class);


