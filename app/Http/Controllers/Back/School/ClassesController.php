<?php

namespace App\Http\Controllers\Back\School;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use App\Http\Requests;

use App\Models\Classes;
use App\Models\Promotion;

class ClassesController extends Controller
{
    public function createClasses($promotion_id){
      $promotion = Promotion::where('id',$promotion_id)->first();

      return view('admin.school_core.classe.create_classe', ['promotion'=>$promotion]);
    }

    public function saveClasses($promotion_id, Request $request)
    {
      $rules=[

        'type'=> 'required',
        'effectif'=> 'required',
        'professor_title'=> 'required',
        'professor_name'=> 'required',
        'professor_firstname'=> 'required',
      ];

      $validator= Validator::make($request->all(),$rules);

      $promotion_id = intval($promotion_id);

      $classe = new Classes();
      $classe->type = $request->input('type');
      $classe->effectif = $request->input('effectif');
      $classe->professor_title = $request->input('professor_title');
      $classe->professor_name = $request->input('professor_name');
      $classe->professor_firstname = $request->input('professor_firstname');
      $classe->promotion_id = $promotion_id;

      $classe->save();

      return redirect()->action('Back\PromotionController@showPromotion',['id' => $promotion_id]);
    }

    public function editClasses($id)
    {
      $classe = Classes::where('id', $id)->first();

      return view('admin.school_core.classe.edit_classe',['classe' => $classe] );
    }

    public function updateClasses($id, Request $request)
    {
      $rules=[

        'type'=> 'required',
        'effectif'=> 'required',
        'professor_title'=> 'required',
        'professor_name'=> 'required',
        'professor_firstname'=> 'required',
      ];

      $validator= Validator::make($request->all(),$rules);

      $classe = Classes::where('id', $id)->first();

      $classe->type = $request->input('type');
      $classe->effectif = $request->input('effectif');
      $classe->professor_title = $request->input('professor_title');
      $classe->professor_name = $request->input('professor_name');
      $classe->professor_firstname = $request->input('professor_firstname');

      $classe->update();

      return redirect()->action('Back\PromotionController@showPromotion',['id' => $classe->promotion->id]);
    }

    public function deleteClasses($id)
    {
      $promotion = Classes::where('id',$id)->first()->promotion;
      $classe = Classes::where('id',$id)->delete();

      return redirect()->action('Back\PromotionController@showPromotion',['id' => $promotion->id]);
    }
}
