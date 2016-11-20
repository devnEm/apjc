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
    $schools = School::all();
    $promotion = Promotion::all();
    return view('public.ecole', ['schools' => $schools,'$promotions'=>$promotion]);
  }
}
