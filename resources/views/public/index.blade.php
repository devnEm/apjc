@extends('layouts.core.app')

@section('content')
<!-- <header><img src="{{ URL::asset('img/apjc-logo-2.png') }}" alt="ecole-header" /></header> -->

<div class="container-fluid index-container-1">
  <div class="row">
    <div class="col-md-6">
      <img src="{{ URL::asset('img/img-800×600.JPG') }}" alt="ecole-gbg" width="555px" height="413px"/>
    </div>
    <div class="col-md-6">
      <div class="panel panel_default">
        <h1>Association</h1><br><h1>des parents d'élèves</h1><br><h1>du Val d'Athis</h1>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid index-container-2">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <article>
                    <h1>L’association APJC a pour but :</h1>
                    <ul class="list-group">
                      <li class="list-group-item">De représenter les parents avec un souci d'égalité de traitement des familles;</li>
                      <li class="list-group-item">De participer activement à tous les sujets relatifs à la vie de l’école;</li>
                      <li class="list-group-item">De tenir informé en toute transparence et de développer une relation de proximité;</li>
                      <li class="list-group-item">D’agir pour le bien-être des enfants dans leur quotidien et dans leur apprentissage;</li>
                      <li class="list-group-item">D’organiser et d’animer des moments d’échange et de partage tout au long de l’année.</li>
                    </ul>
              </article>
            </div>
        </div>
    </div>
</div>
@endsection
