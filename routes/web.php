<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::resource('posts', PostController::class);
});

Route::redirect('/', '/posts');