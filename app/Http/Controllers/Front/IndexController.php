<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Models\School;
use App\Models\Promotion;

class IndexController extends Controller
{

  public function index()
  {

    return view('public.index');
  }

  public function ecole()
  {

    $promotions = Promotion::where('current', true )->get();
    return view('public.ecole', ['promotions' => $promotions]);
  }
}
