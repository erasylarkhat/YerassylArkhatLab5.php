<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class BlogController extends Controller{
    
	public function blogCreater(){
		return view('gallery');
	}
	public function blogIndex(Request $req){
		$post = new Post;
		$post->title = $req->title;
		$post->body = $req->body;
		echo $post->save();
	}

}
