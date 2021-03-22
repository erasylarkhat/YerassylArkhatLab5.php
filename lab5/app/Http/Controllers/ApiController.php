<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ApiController extends Controller{
    public function index(Request $req){
    	$posts = Post::all();

    	return response($posts, 200);
  	}

  	public function get_post(Request $req){
  		$post = Post::find($req->$post_id);

  		if($post == null) return response(['message' => 'There is no post with such id'], 404);
  		else return response($post, 200);
  	}
}
