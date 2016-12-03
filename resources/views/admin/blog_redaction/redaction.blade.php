@extends('layouts.admin.app')
@section('tools')
<div class="tools">
  <a href="{{url('/admin/redaction/create/post')}}"><button type="button" name="button" class="btn btn-primary">ajouter un article</button></a>
  <a href="{{url('/admin/redaction/create/category')}}"><button type="button" name="button" class="btn btn-primary">ajouter une categorie</button></a>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">la redaction</div>
      <div class="panel-body">
        <h4>filtres</h4>
        <h3>Liste des articles</h3>
        <div class="table table-responsive">
          <table class="table">
            <thead>
              <td>Titre</td>
              <td>Date</td>
              <td>nb_vu</td>
              <td>Auteur</td>
              <td>Categorie</td>
              <td>publié</td>
              <td>à la une</td>
              <td></td>

            </thead>
            <tbody>
              @foreach($posts as $post)
              <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->created_at->format('M Y')}}</td>
                <td>{{$post->views}}</td>
                <td>{{$post->user_id}}</td>
                <td>{{$post->category->label}}</td>
                <td>{{$post->publish}}</td>
                <td>{{$post->front}}</td>
                <td><a href="{{url('/admin/redaction/edit/post/'.$post->id)}}"><button type="button" name="button" class="btn btn-warning">modifier</button></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('info')
<div class="panel panel-info">
    <div class="panel-heading">INFOS</div>
    <div class="panel-body">
        <p>
          message d'informations ecrite en dur
        </p>
    </div>
</div>
@endsection
