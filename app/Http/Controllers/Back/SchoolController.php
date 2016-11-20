<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use App\Http\Requests;

use App\Models\School;
use App\Models\Promotion;

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
    $schools = School::all();

    return view('admin.schools.school', ['schools' => $schools]);
  }

  public function showSchool($id)
  {
     $school = School::where('id', $id)->first();

     return view('admin.schools.show_school',['school' => $school]);
  }

  public function saveSchool(Request $request)
  {
    $rules=[
    'name' => 'required',
    'type' => 'required',
    'street' => 'required',
    'city'=> 'required'
    ];

    $validator= Validator::make($request->all(),$rules);

    $school = new School();
    $school->name = $request->input('name');
    $school->type = $request->input('type');
    $school->street = $request->input('street');
    $school->city = $request->input('city');

    $school->save();

    return redirect()->action('Back\SchoolController@showSchool',['id' => $school->id]);
  }

  public function createSchool()
  {

      return view('admin.schools.create_school');
  }

  public function editSchool($id)
  {
    $school = School::where('id', $id)->first();
    return view('admin.schools.edit_school',['school'=>$school]);
  }

  public function updateSchool($id, Request $request)
  {

    $school= School::where('id', $id)->first();

    $rules= [
    'name' => 'required',
    'type' => 'required',
    'street' => 'required',
    'city'=> 'required'
    ];

    $validator= Validator::make($request->all(),$rules);

    $school->name = $request->input('name');
    $school->type = $request->input('type');
    $school->street = $request->input('street');
    $school->city = $request->input('city');

    $school->update();

    return redirect()->action('Back\SchoolController@showSchool',['id' => $school->id]);
  }

  public function deleteSchool($id)
  {
      $school = School::where('id',$id)->delete();

      return redirect()->action('Back\SchoolController@showAllSchool');
  }

  /************************************
   *
   *  PROMOTION CONTROLS
   *
   *************************************/

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
    'school_name'=> 'required'
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

    $promotion->save();

    return redirect()->action('Back\SchoolController@showPromotion',['id' => $promotion->id]);
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

    return view('admin.schools.edit_promotion',['promotion' => $promotion , 'school' => $school]);
  }

  public function showAllPromotion()
  {
    $promotions = Promotion::all();
    return view('admin.schools.promotion',['promotions' => $promotions]);
  }

  public function deletePromotion($id)
  {
    $promotion = Promotion::where('id',$id)->delete();

    return redirect()->action('Back\SchoolController@showAllPromotion');
  }
}
