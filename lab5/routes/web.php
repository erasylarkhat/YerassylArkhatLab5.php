<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\BlogController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('aboutme');

Route::get('/contact', function () {
    return view('gallery');
})->name('contactme');




Route::get('/blog/create', [BlogController::class, 'blogCreater'])->name('blogCreate');

Route::post('blog/submit', [BlogController::class, 'blogIndexSubmit']);

Route::get('blog/index', [BlogController::class, 'blogIndex'])->name('blogIndex');

Route::get('post/{id}', [BlogController::class, 'get_blog']);