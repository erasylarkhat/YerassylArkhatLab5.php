<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class BlogController extends Controller{
    
	public function blogCreater(){
		return view('gallery');
	}
	public function blogIndexSubmit(Request $req){
		$_post_ = new Post;
		$_post_->title = $req->title;
		$_post_->body = $req->body;
		$_post_->save();
		return view('gallery');
	}
	public function blogIndex(){
		$data = Post::all();
		return view('posts', ['posts'=>$data]);
	}

	public function get_blog($id){
		$post = Post::find($id);

		if($post == null) return response(404);

		return $post;
	}
}
