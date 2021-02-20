<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('aboutme');

Route::get('/contact', function () {
    return view('gallery');
})->name('contactme');
