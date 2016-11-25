<?php

namespace App\Http\Controllers\Back\Redaction;

use App\Http\Controllers\Controller;

use Validator;
use App\Http\Requests;

use App\Models\Post;

class PostController extends Controller
{
    public function redaction(){
      $posts = Post::all();
      return view('admin.blog_redaction.redaction',['posts' => $posts]);
    }

    public function createPost(){

      return view('admin.blog_redaction.posts.create_post');
    }
}
