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
          'candidat',
          'suppleant',
          'rang',
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
      $adherent->user_id = 0;
      $adherent->candidat = $request->input('candidat');
      $adherent->suppleant = $request->input('suppleant');
      if($request->input('hidden_phone') == null){
        $adherent->hidden_phone = false;
      }else{
        $adherent->hidden_phone = true;
      }
      if($request->input('email_subscription') == null){
        $adherent->email_subscription = false;
      }else{
        $adherent->email_subscription = true;
      }

      if($request->input('subscribed') == null){
        $adherent->subscribed = false;
      }else{
        $adherent->subscribed = true;
      }

      $adherent->save();

      return redirect()->action('Back\Association\AdherentController@allAdherent');
    }
}
