<?php

namespace App\Http\Controllers\Back;

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
    return view('admin.schools.show_promotion',['promotion'=>$promotion]);
  }

  public function savePromotion(Request $request)
  {
    $rules=[
    'year' => 'required',
    'director_title' => 'required',
    'director_name' => 'required',
    'director_firstname'=> 'required',
    'total_student_effectives'=> 'required',
    'nb_class'=> 'required',
    'school_name'=> 'required',
    'current'=> 'required'
    ];

    $validator= Validator::make($request->all(),$rules);

    $school_id = intval($request->input('school_name')[0]);

    $promotion = new Promotion();
    $promotion->year = $request->input('year');
    $promotion->director_title = $request->input('director_title');
    $promotion->director_name = $request->input('director_name');
    $promotion->director_firstname = $request->input('director_firstname');
    $promotion->total_student_effectives = $request->input('total_student_effectives');
    $promotion->nb_class = $request->input('nb_class');
    $promotion->school_id = $school_id;

    if($request->input('current') == null){
      $promotion->current = false;
    }else{
      $promotion->current = true;
    }

    $promotion->save();

    return redirect()->action('Back\PromotionController@showPromotion',['id' => $promotion->id]);
  }

  public function createPromotion()
  {
    $school = School::lists('name', 'id');

    return view('admin.schools.create_promotion',['school' => $school]);
  }

  public function editPromotion($id)
  {
    $promotion = Promotion::where('id', $id)->first();
    $school = School::lists('name', 'id');

    $currentSchool = School::where('id',$promotion->school->id)->first();

    return view('admin.schools.edit_promotion',['promotion' => $promotion , 'school' => $school, 'currentSchool' => $currentSchool]);
  }

  public function showAllPromotion()
  {
    $promotions = Promotion::all();
    return view('admin.schools.promotion',['promotions' => $promotions]);
  }

  public function updatePromotion($id, Request $request)
  {
    $rules=[
    'year' => 'required',
    'director_title' => 'required',
    'director_name' => 'required',
    'director_firstname'=> 'required',
    'total_student_effectives'=> 'required',
    'nb_class'=> 'required',
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
    $promotion->total_student_effectives = $request->input('total_student_effectives');
    $promotion->nb_class = $request->input('nb_class');
    $promotion->current = $request->input('current');
    $promotion->school_id = $school_id;

    $promotion->update();

    return redirect()->action('Back\PromotionController@showPromotion',['id' => $promotion->id]);
  }

  public function deletePromotion($id)
  {
    $promotion = Promotion::where('id',$id)->delete();

    return redirect()->action('Back\PromotionController@showAllPromotion');
  }
}
