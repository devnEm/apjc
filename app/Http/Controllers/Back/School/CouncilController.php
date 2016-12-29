<?php

namespace App\Http\Controllers\Back\School;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use App\Http\Requests;

use App\Models\Council;
use App\Models\Promotion;

class CouncilController extends Controller
{
  public function createCouncil($promotion_id){

    $promotion = Promotion::where('id',$promotion_id)->first();

    return view('admin.school_core.council.create_council', ['promotion'=>$promotion]);
  }

  public function saveCouncil($promotion_id, Request $request)
  {
    $rules=[
      'date'=> 'required',
    ];

    $messages = [
      'required' => 'Une date - même temporaire - est requise'
    ];

    $validator= Validator::make($request->all(),$rules,$messages);

    if($validator->fails()){
      return redirect('/admin/promotion/create/council/'.$promotion_id)
        ->withErrors($validator)
        ->withInput();
    }
    // var_dump($request->input('date'));die('sa mere');

    $promotion_id = intval($promotion_id);

    list($jour, $mois, $annee) = explode("/", $request->input('date'));
    $dateToStored = $annee."-".$mois."-".$jour;

    $council = new Council();
    $council->date = $dateToStored;
    $council->url = $request->input('url');
    $council->promotion_id = $promotion_id;
    $council->save();

    return redirect()->action('Back\School\PromotionController@showPromotion',['id' => $promotion_id]);
  }

  public function editCouncil($id)
  {
    $council = Council::where('id', $id)->first();

    return view('admin.school_core.council.edit_council',['council' => $council] );
  }

  public function updateCouncil($id, Request $request)
  {
    $rules=[
      'date'=> 'required | regex:/[0-9]{2}[\/][0-9]{2}[\/][0-9]{4}/',
    ];

    $messages = [
      'required' => 'Une date - même temporaire - est requise',
      'regex' => 'respecter le format JJ/MM/AAAA'
    ];

    $validator= Validator::make($request->all(),$rules, $messages);

    if($validator->fails()){
      return redirect('/admin/promotion/council/edit/'.$id)
        ->withErrors($validator)
        ->withInput();
    }

    $council = Council::where('id', $id)->first();

    // var_dump($request->input('date'));die();
    list($jour, $mois, $annee) = explode("/", $request->input('date'));
    $dateToStored = $annee."-".$mois."-".$jour;

    $council->date = $dateToStored;
    $council->url = $request->input('url');

    $council->update();

    return redirect()->action('Back\School\PromotionController@showPromotion',['id' => $council->promotion->id]);
  }

}
