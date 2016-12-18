<?php

namespace App\Http\Controllers\Back\Association;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;

use App\Http\Requests;

use App\Models\Adherent;
use App\Models\Bureau;

class BureauController extends Controller
{
  public function addMember(){

    $adherents = Adherent::lists('name', 'id');

    return view('admin.association.bureau.add_member', ['adherents' => $adherents]);
  }

  public function saveMember(Request $request){

    $rules=[
      'president',
      'secretaire',
      'comptable',
      'redacteur',
      'adherent_id'
      ];

    $validator= Validator::make($request->all(),$rules);

    $adherent_id = intval($request->input('adherent_name')[0]);

    $bureau = new Bureau();
    $bureau->adherent_id = $adherent_id;
    $bureau->president = ($request->input('president') == null) ? false : true ;
    $bureau->secretaire = ($request->input('secretaire') == null) ? false : true ;
    $bureau->comptable = ($request->input('comptable') == null) ? false : true ;

    $bureau->save();

    return redirect()->action('Back\AdminController@index');
  }

  public function editMember($id){

    $bureau = Bureau::where('adherent_id', $id)->first();

    return view('admin.association.bureau.edit_member', ['bureau' => $bureau]);
  }
}
