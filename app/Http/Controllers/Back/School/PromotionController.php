<?php

namespace App\Http\Controllers\Back\School;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use App\Http\Requests;

use App\Models\Promotion;
use App\Models\School;

class PromotionController extends Controller
{
  public function showPromotion($id)
  {
    $promotion = Promotion::where('id', $id)->first();
    $effectif_total = $promotion->classes->sum('effectif');
    return view('admin.school_core.promotion.show_promotion',['promotion'=>$promotion, 'effectif'=>$effectif_total]);
  }

  public function savePromotion(Request $request)
  {
    $rules=[
    'year' => 'required | regex:/[0-9]{4}+[\/][0-9]{4}/',
    'director_title',
    'director_name' => 'required',
    'director_firstname',
    'current'
    ];

    $messages = [
      'regex' => 'Respectez le format => "2016/2017"',
      'required' => 'L\'année scolaire est requis'
    ];


    $validator= Validator::make($request->all(),$rules,$messages);
    if($validator->fails()){
      return redirect('/admin/promotion/create')
        ->withErrors($validator)
        ->withInput();
    }

    $school_id = intval($request->input('school_id'));
    $promotion = new Promotion();
    if($school_id == 0){
      return redirect('/admin/promotion/create')
        ->with('status', 'Il manque une école')
        ->withInput();
    }else{
      $promotion->school_id = $school_id;
    }
    $promotion->year = $request->input('year');
    $promotion->director_title = $request->input('director_title');
    $promotion->director_name = $request->input('director_name');
    $promotion->director_firstname = $request->input('director_firstname');
    $promotion->current = ($request->input('current') == null) ? false : true;

    $promotion->save();

    return redirect()->action('Back\School\PromotionController@showPromotion',['id' => $promotion->id])->with('status','Bienvenue');
  }

  public function createPromotion()
  {
    $school = School::lists('name', 'id');
    // var_dump(typeof($school));die();
    return view('admin.school_core.promotion.create_promotion',['school' => $school]);
  }

  public function editPromotion($id)
  {
    $promotion = Promotion::where('id', $id)->first();
    $school = School::lists('name', 'id');

    $currentSchool = School::where('id',$promotion->school->id)->first();

    return view('admin.school_core.promotion.edit_promotion',['promotion' => $promotion , 'school' => $school, 'currentSchool' => $currentSchool]);
  }

  public function showAllPromotion()
  {
    $promotions = Promotion::all();
    return view('admin.school_core.promotion.promotions',['promotions' => $promotions]);
  }

  public function updatePromotion($id, Request $request)
  {
    $rules=[
    'year' => 'required',
    'director_title' => 'required',
    'director_name' => 'required',
    'director_firstname'=> 'required',
    'school_name'=> 'required',
    'current'=> 'required'
    ];

    $validator= Validator::make($request->all(),$rules);

    $school_id = intval($request->input('school_name'));

    $promotion = Promotion::where('id', $id)->first();
    $promotion->year = $request->input('year');
    $promotion->director_title = $request->input('director_title');
    $promotion->director_name = $request->input('director_name');
    $promotion->director_firstname = $request->input('director_firstname');
    if($request->input('current') == null){
      $promotion->current = false;
    }else{
      $promotion->current = true;
    }
    $promotion->school_id = $school_id;

    $promotion->update();

    return redirect()->action('Back\School\PromotionController@showPromotion',['id' => $promotion->id]);
  }

  public function deletePromotion($id)
  {
    $promotion = Promotion::where('id',$id)->delete();

    return redirect()->action('Back\School\PromotionController@showAllPromotion');
  }
}
