<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;

use App\Http\Requests;

use App\Models\Promotion;
use App\Models\Election;

class ElectionController extends Controller
{
    public function showElection($promotion_id){

      $promotion = Promotion::where('id',$promotion_id)->first();
      $election = Election::where('promotion_id', $promotion->id)->first();

      // echo($promotion);die;

      return view('admin.election.show_election',['promotion'=>$promotion,'election'=>$election]);
    }

    public function createElection($promotion_id){

      $promotion = Promotion::where('id',$promotion_id)->first();

      return view('admin.election.create_election',['promotion'=>$promotion]);
    }

    public function saveElection($promotion_id, Request $request)
    {
      $rules=[

        'date' => 'required',

      ];

      $validator= Validator::make($request->all(),$rules);

      $promotion_id = intval($promotion_id);

      $election = new Election();
      $election->date = $request->input('date');
      $election->sieges_totaux = $request->input('sieges_totaux');
      $election->sieges_obtenus = $request->input('sieges_obtenus');
      $election->participation = $request->input('nb_votant')/$request->input('nb_electeur')*100;
      $election->nb_votant = $request->input('nb_votant');
      $election->nb_electeur = $request->input('nb_electeur');
      $election->promotion_id = $promotion_id;

      $election->save();

      return redirect()->action('Back\ElectionController@showElection',['id' => $promotion_id]);
    }

    public function showAllElection()
    {
      $elections = Election::all();
      return view('admin.election.elections',['elections'=>$elections]);
    }



}
