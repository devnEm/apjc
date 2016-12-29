<?php

namespace App\Http\Controllers\Back\School;

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

      return view('admin.school_core.election.show_election',['promotion'=>$promotion,'election'=>$election]);
    }

    public function createElection($promotion_id){

      $promotion = Promotion::where('id',$promotion_id)->first();

      return view('admin.school_core.election.create_election',['promotion'=>$promotion]);
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
      $election->nb_votant = $request->input('nb_votant');
      $election->nb_electeur = $request->input('nb_electeur');
      $election->promotion_id = $promotion_id;

      if($request->input('nb_electeur') == 0 ){
        $election->participation = 0;
      }else{
        $election->participation = $request->input('nb_votant')/$request->input('nb_electeur')*100;
      }


      $election->save();

      return redirect()->action('Back\School\ElectionController@showElection',['id' => $promotion_id]);
    }

    public function showAllElection()
    {
      $elections = Election::all();
      return view('admin.school_core.election.elections',['elections'=>$elections]);
    }

    public function editElection($election_id){

      $election = Election::where('id',$election_id)->first();

      return view('admin.school_core.election.edit_election',['election'=>$election]);
    }

    public function updateElection($election_id, Request $request){
      $rules=[
        'date' => 'required',
      ];

      $validator= Validator::make($request->all(),$rules);

      $election = Election::where('id',$election_id)->first();

      $election->date = $request->input('date');
      $election->sieges_totaux = $request->input('sieges_totaux');
      $election->sieges_obtenus = $request->input('sieges_obtenus');
      $election->nb_votant = $request->input('nb_votant');
      $election->nb_electeur = $request->input('nb_electeur');

      if($request->input('nb_electeur') == 0 ){
        $election->participation = 0;
      }else{
        $election->participation = $request->input('nb_votant')/$request->input('nb_electeur')*100;
      }

      $election->update();

      return redirect()->action('Back\School\ElectionController@showElection',['id' => $election_id]);
    }




}
