<?php

namespace App\Http\Controllers\Back\Association;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Validator;

use App\Http\Requests;

use App\Models\Adherent;
use App\Models\Bureau;
use App\Models\User;

class BureauController extends Controller
{

  use AuthenticatesAndRegistersUsers;

  public function allMember(){

    $bureau_members = Bureau::all();

    return view('admin.association.bureau.all_member', ['bureau_members' => $bureau_members]);
  }

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
    $adherent = Adherent::where('id', $adherent_id)->first();

    if($adherent->user === null){
      $user = User::create([
        'name' => $adherent->name,
        'email' => $adherent->email,
        'password' => bcrypt('azerty'),
        'adherent_id' => $adherent_id,
      ]);
    }


    $bureau = new Bureau();
    $bureau->adherent_id = $adherent_id;
    $bureau->president = ($request->input('president') == null) ? false : true ;
    $bureau->secretaire = ($request->input('secretaire') == null) ? false : true ;
    $bureau->comptable = ($request->input('comptable') == null) ? false : true ;
    $bureau->redacteur = ($request->input('redacteur') == null) ? false : true ;

    $bureau->save();

    return redirect()->action('Back\AdminController@index')
          ->with('status', 'Nouveau membre du bureau ajouté');
  }

  public function editMember($id){

    $bureau = Bureau::where('id', $id)->first();

    return view('admin.association.bureau.edit_member', ['bureau' => $bureau]);
  }

  public function deleteMember($id){

    $bureau = Bureau::where('id', $id)->first();
    $user = User::where('adherent_id', $bureau->adherent_id)->first();
    var_dump($user.' - '.$bureau);die();
    if( !$user->admin){
      User::destroy($user->id);
    }
    $bureau->destroy($id);

    return redirect()->action('Back\AdminController@index')
          ->with('status', 'Membre du bureau supprimé');
  }
}
