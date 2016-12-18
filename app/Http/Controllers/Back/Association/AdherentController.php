<?php

namespace App\Http\Controllers\Back\Association;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;

use App\Http\Requests;

use App\Models\Adherent;

class AdherentController extends Controller
{
    public function allAdherent(){

      $adherents = Adherent::all();

      return view('admin.association.adherent.show_all_adherents',['adherents' => $adherents]);
    }

    public function createAdherent(){

      return view('admin.association.adherent.create_adherent');
    }

    public function saveAdherent(Request $request){

      $rules = [
          'titre',
          'name',
          'first_name',
          'email',
          'phone',
          'hidden_phone',
          'email_subscription',
          'subscribed'
      ];

      $validator= Validator::make($request->all(),$rules);

      $adherent = new Adherent();
      $adherent->titre = $request->input('titre');
      $adherent->name = $request->input('name');
      $adherent->first_name = $request->input('first_name');
      $adherent->phone = $request->input('phone');
      $adherent->email = $request->input('email');
      $adherent->hidden_phone = ($request->input('hidden_phone') == null) ? false : true ;
      $adherent->email_subscription = ($request->input('email_subscription') == null) ? false : true ;
      $adherent->subscribed = ($request->input('subscribed') == null) ? false : true ;

      $adherent->save();

      return redirect()->action('Back\Association\AdherentController@allAdherent');
    }

    public function editAdherent($id){

      $adherent = Adherent::where('id', $id)->first();

      return view('admin.association.adherent.edit_adherent',['adherent'=> $adherent]);
    }

    public function updateAdherent($id,Request $request){

      $rules = [
          'titre',
          'name',
          'first_name',
          'email',
          'phone',
          'hidden_phone',
          'email_subscription',
          'subscribed'
      ];

      $validator= Validator::make($request->all(),$rules);

      $adherent = Adherent::where('id',$id)->first();
      $adherent->titre = $request->input('titre');
      $adherent->name = $request->input('name');
      $adherent->first_name = $request->input('first_name');
      $adherent->phone = $request->input('phone');
      $adherent->email = $request->input('email');
      $adherent->hidden_phone = ($request->input('hidden_phone') == null) ? false : true ;
      $adherent->email_subscription = ($request->input('email_subscription') == null) ? false : true ;
      $adherent->subscribed = ($request->input('subscribed') == null) ? false : true ;

      $adherent->update();

      return redirect()->action('Back\Association\AdherentController@allAdherent');
    }
}
