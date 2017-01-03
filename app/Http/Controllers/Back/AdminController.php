<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;

use App\Models\User;
use App\Models\School;
use App\Models\Election;
use App\Models\Promotion;
use App\Models\Adherent;
use App\Models\Bureau;

class AdminController extends Controller
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


    public function index()
    {
      $promotions = Promotion::where('current',true)->get();
      $elections = Election::all();
      $users = User::all();
      $schools = School::all();
      $adherents = Adherent::all();
      $bureau_members = Bureau::all();

      return view('admin.admin',
       [
         'users' => $users,
         'schools' => $schools,
         'elections' => $elections,
         'promotions' => $promotions,
         'adherents' => $adherents,
         'bureau_members' => $bureau_members
     ]);
    }

    
}
