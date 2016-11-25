@extends('layouts.admin.app')
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
              <td>en attente</td>
              <td>en ligne</td>
              <td></td>

            </thead>
            <tbody>
              @foreach($posts as $post)
              <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->date}}</td>
                <td>{{$post->nb_vu}}</td>
                <td>{{$post->user_id}}</td>
                <td>{{$post->attente}}</td>
                <td>{{$post->public}}</td>
                <td><a href="#"><button type="button" name="button" class="btn btn-warning">modifier</button></a></td>
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
