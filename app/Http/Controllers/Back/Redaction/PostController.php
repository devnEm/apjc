<?php

namespace App\Http\Controllers\Back\Redaction;

use App\Http\Controllers\Controller;

use Validator;
use App\Http\Requests;

class PostController extends Controller
{
    public function createPost(){

      return view('admin.blog_redaction.posts.create_post');
    }
}
