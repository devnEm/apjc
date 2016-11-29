<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Models\School;
use App\Models\Promotion;
use App\Models\Post;

class IndexController extends Controller
{

  public function index()
  {

    return view('public.index');
  }

  public function ecole()
  {
    $posts = Post::all();
    $promotions = Promotion::where('current', true )->get();
    return view('public.ecole', ['promotions' => $promotions,'posts' => $posts]);
  }
}
