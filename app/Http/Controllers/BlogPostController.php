<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BlogPost as BlogPost;

class BlogPostController extends Controller
{
    
	public function index(){

		$posts = BlogPost::all();
		$data = array(
				"posts" => $posts
			);

		return view("blog", $data);

	}

}
