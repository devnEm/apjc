<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Models\Post;
use Carbon\Carbon;

class NewsController extends Controller
{
  public function index()
  {
    $posts = Post::where('publish',true)->get();
    return view('public.news',['posts'=>$posts]);
  }

  public function article($id)
  {
    $post = Post::where('id',$id)->first();
    $post->views = $post->views + 1;
    $post->update();
    return view('public.article',['post'=>$post]);
  }
}
