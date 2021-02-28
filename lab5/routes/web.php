<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('aboutme');

Route::get('/contact', function () {
    return view('gallery');
})->name('contactme');


Route::get('/post/create', function(){
    DB::table('posts')->insert([
        'id'=>2,
        'title'=>'FirstPost',
        'body'=>'Some text to first post'

    ]);
});
Route::get('/post', function(){
    $post = Post::orderBy('created_at', 'desc')->get();
    return view('post', [
    	'post'=>$post
    ]);
});