<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use App\Http\Requests;

use App\Models\School;


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

    return view('admin.schools.schools', ['schools' => $schools]);
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


}
