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
          'label'
        ];

      $validator= Validator::make($request->all(),$rules);

      $categorie = new Categorie();
      $categorie->label = $request->input('label');

      $categorie->save();

      return redirect()->action('Back\Redaction\PostController@redaction');
    }

    public function editCategory(){

      return view('admin.blog_redaction.category.edit_category');
    }
}
