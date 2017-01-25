@extends('layouts.admin.app')
@section('tools')
<div class="col-md-8 tools">
  <a href="/admin"><button type="button" name="button" class="btn btn-info">Retour</button></a>
  <a href="{{url('/admin/promotion/create/classe/'.$promotion->id)}}"><button type="button" name="button" class="btn btn-success">Ajouter une Classe</button></a>
  <!-- <a href="{{url('/admin/promotion/edit/'.$promotion->id)}}"><button type="button" name="button" class="btn btn-warning">modifier</button></a> -->
  <a href="{{url('/admin/election/show/'.$promotion->id)}}"><button type="button" name="button" class="btn btn-success">Gérer les Elections</button></a>
  @if(count($promotion->councils) < 3)
  <a href="{{url('/admin/promotion/create/council/'.$promotion->id)}}"><button type="button" name="button" class="btn btn-success">Ajouter un Conseil</button></a>
  @endif
  <a href="{{url('/admin/promotion/edit/'.$promotion->id)}}">
    <button type="button" name="button" class="btn btn-warning">Modifier</button>
  </a>
</div>
@endsection
@section('content')
  @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
  @endif
<div class="row">
  <div class="col-md-6">
    <div class="panel panel-info">
      <div class="panel-heading">{{$promotion->year}} - {{$promotion->school->name}} @if($promotion->current)<span>&#9733;</span>@endif</div>
      <div class="panel-body">
          <div class="table table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>Directrice</td>
                  <td>{{$promotion->director_title}} {{$promotion->director_name}} {{$promotion->director_firstname}}</td>
                </tr>
                <tr>
                  <td>Référent APJC</td>
                  <td>Adhérent n°1</td>
                </tr>
                <tr>
                  <td>Effectifs</td>
                  <td>{{$effectif}}</td>
                </tr>
                <tr>
                  <td>nbre de classe</td>
                  <td>{{count($promotion->classes)}}</td>
                </tr>
              </tbody>
            </table>
          </div>

      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="titre">Conseils d'école</div>
      </div>
      <div class="panel-body">
        <h4>Dates des conseils</h4>
        <ul>
          @foreach($promotion->councils as $council)
          <li>
            <label>Date : </label>
            <date>{{$council->date}}</date><br>
            <a href="{{url('/getRapport/'.$council->id)}}"><button type="button" class="btn btn-primary">voir le rapport</button></a>
            <a href="{{url('/admin/promotion/council/edit/'.$council->id)}}"><button type="button" class="btn btn-warning">modifier</button></a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="panel panel-info">
      <div class="panel-heading">Classes</div>
      <div class="panel-body">
        <div class="table table-responsive">
          <table class="table">
            <thead>
              <td>classe</td>
              <td>nbre</td>
              <td>Enseignant</td>
              <td></td>
            </thead>
            <tbody>
              @foreach($promotion->classes as $classe)
              <tr>
                <td>{{$classe->type}}</td>
                <td>{{$classe->effectif}}</td>
                <td>{{$classe->professor_title}} {{$classe->professor_name}}</td>
                <td><a href="{{url('/admin/promotion/classe/edit/'.$classe->id)}}"><button type="button" name="button" class="btn btn-warning">modifier</button></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="panel panel-info">
      <div class="panel-heading">Elections</div>
      <div class="panel-body">
        <label>Date</label>
        @if($promotion->election)
        <span>{{$promotion->election->date}}</span>
        @else
        <span>à venir</span>
        @endif
        <h4>Candidats</h4>
        <ul>
          <li>Mme Untel</li>
          <li>Mme Deuxtel</li>
        </ul>
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
