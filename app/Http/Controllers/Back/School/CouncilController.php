<?php

namespace App\Http\Controllers\Back\School;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use App\Http\Requests;

use App\Models\Council;
use App\Models\Promotion;

class CouncilController extends Controller
{
  public function createCouncil($promotion_id){

    $promotion = Promotion::where('id',$promotion_id)->first();

    return view('admin.school_core.council.create_council', ['promotion'=>$promotion]);
  }

  public function saveCouncil($promotion_id, Request $request)
  {
    $rules=[

      'date'=> 'required',
    ];

    $validator= Validator::make($request->all(),$rules);

    $promotion_id = intval($promotion_id);

    $council = new Council();
    $council->date = $request->input('date');
    $council->url = $request->input('url');
    $council->promotion_id = $promotion_id;

    $council->save();

    return redirect()->action('Back\PromotionController@showPromotion',['id' => $promotion_id]);
  }

  public function editCouncil($id)
  {
    $council = Council::where('id', $id)->first();

    return view('admin.school_core.council.edit_council',['council' => $council] );
  }

  public function updateCouncil($id, Request $request)
  {
    $rules=[

      'date'=> 'required',
    ];

    $validator= Validator::make($request->all(),$rules);

    $council = Council::where('id', $id)->first();

    $council->date = $request->input('date');
    $council->url = $request->input('url');

    $council->update();

    return redirect()->action('Back\PromotionController@showPromotion',['id' => $council->promotion->id]);
  }

}
