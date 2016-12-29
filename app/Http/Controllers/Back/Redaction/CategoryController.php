<?php

namespace App\Http\Controllers\Back\Redaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;

use App\Http\Requests;

use App\Models\Categorie;

class CategoryController extends Controller
{
    public function createCategory(){

      return view('admin.blog_redaction.category.create_category');
    }

    public function saveCategory(Request $request){

      $rules=[
          'label' => 'required'
        ];

      $validator= Validator::make($request->all(),$rules);

      if($validator->fails()){
        return redirect('/admin/redaction/create/category')
        ->withErrors($validator)
        ->withInput();
      }

      $categorie = new Categorie();
      $categorie->label = $request->input('label');

      $categorie->save();

      return redirect()->action('Back\Redaction\PostController@redaction')->with('status', 'La catégorie a bien été enregistrée');
    }

    public function editCategory(){

      return view('admin.blog_redaction.category.edit_category');
    }
}
