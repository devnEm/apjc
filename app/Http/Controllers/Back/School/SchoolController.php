<?php

namespace App\Http\Controllers\Back\School;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use App\Http\Requests;

use App\Models\School;
use App\Models\Categorie;


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

    return view('admin.school_core.schools.schools', ['schools' => $schools]);
  }

  public function showSchool($id)
  {
     $school = School::where('id', $id)->first();

     return view('admin.school_core.schools.show_school',['school' => $school]);
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

    $categorie = new Categorie();
    $categorie->label = $request->input('name');

    $categorie->save();

    return redirect()->action('Back\School\SchoolController@showSchool',['id' => $school->id]);
  }

  public function createSchool()
  {

      return view('admin.school_core.schools.create_school');
  }

  public function editSchool($id)
  {
    $school = School::where('id', $id)->first();
    return view('admin.school_core.schools.edit_school',['school'=>$school]);
  }

  public function updateSchool($id, Request $request)
  {

    $school= School::where('id', $id)->first();
    $category = Categorie::where('label',$school->name)->first();

    $rules= [
    'name' => 'required',
    'type' => 'required',
    'street' => 'required',
    'city'=> 'required'
    ];

    $validator= Validator::make($request->all(),$rules);

    $school->name = $request->input('name');
    $category->label = $request->input('name');
    $school->type = $request->input('type');
    $school->street = $request->input('street');
    $school->city = $request->input('city');

    $school->update();
    $category->update();    

    return redirect()->action('Back\School\SchoolController@showSchool',['id' => $school->id]);
  }

  public function deleteSchool($id)
  {
      $school = School::where('id',$id)->delete();

      return redirect()->action('Back\\School\SchoolController@showAllSchool');
  }


}
