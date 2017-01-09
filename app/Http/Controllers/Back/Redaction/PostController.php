<?php

namespace App\Http\Controllers\Back\Redaction;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

use Validator;
use Auth;
use App\Http\Requests;


use App\Models\Post;
use App\Models\School;
use App\Models\Categorie;
use App\Models\Council;

class PostController extends Controller
{
    public function redaction(){
      $posts = Post::all();
      return view('admin.blog_redaction.redaction',['posts' => $posts]);
    }

    public function createPost(){

      $categories = array_merge(array('Sélectionner'), Categorie::lists('label', 'id')->all());
      $councilRapportPath = Council::whereNotNull('url')->get();
      foreach ($councilRapportPath as $councilRapport) {
        // $rapports[] = Storage::get('rapports/'.$councilRapport->url);
        $rapports[]= $councilRapport->url;
      }
      $rapports = array_merge(array('Sélectionner'),$rapports);
      return view('admin.blog_redaction.posts.create_post',['categorie'=>$categories, 'rapports'=> $rapports]);
    }

    public function savePost(Request $request)
    {
      $post = new Post();
      if($request->input('publish') == null){
        $post->publish = false;
      }else{
        $post->publish = true;
      }
      if($request->input('front') == null){
        $post->front = false;
      }else{
        $post->front = true;
      }
      $post->title = $request->input('title');
      $post->views = 0;
      $post->article = $request->input('article');

      if(intval($request->input('categorie_id')) == 0){
        return redirect('/admin/redaction/create/post')
          ->with('status', 'Il manque une catégorie')
          ->withInput();
      }else{
        $post->categorie_id = intval($request->input('categorie_id'));
      }

      $post->user_id = Auth::user()->id;

      $post->save();
      $request->session()->flash('status', 'L\'article a été enregistré');

      return redirect()->action('Back\Redaction\PostController@redaction');
    }

    public function editPost($id){

      $post = Post::where('id',$id)->first();
      $categories = array_merge(array('Select...'), Categorie::lists('label', 'id')->all());
      return view('admin.blog_redaction.posts.edit_post',['categorie'=>$categories,'post'=>$post]);
    }

    public function updatePost($id,Request $request)
    {

      $post = Post::where('id',$id)->first();
      $post->publish = $request->input('publish');
      $post->front = $request->input('front');
      $post->title = $request->input('title');
      $post->article = $request->input('article');
      if(intval($request->input('categorie_id')) == 0){
        return redirect('/admin/redaction/edit/post/'.$id)
          ->with('status', 'Il manque une catégorie');
      }else{
        $post->categorie_id = intval($request->input('categorie_id'));
      }
      $post->user_id = Auth::user()->id;

      $post->update();

      return redirect()->action('Back\Redaction\PostController@redaction');
    }
}
