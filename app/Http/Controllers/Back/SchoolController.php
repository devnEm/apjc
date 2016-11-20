<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;

class SchoolController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function showAllSchool()
  {

      return view('admin.schools.school');
  }

  public function showSchool()
  {

      return view('admin.schools.showschool');
  }

  public function createSchool()
  {

      return view('admin.schools.createschool');
  }

  public function showMillesime()
  {

      return view('admin.schools.showmillesime');
  }

  public function createMillesime()
  {

      return view('admin.schools.createmillesime');
  }

  public function showAllMillesime()
  {

      return view('admin.schools.millesime');
  }
}
