@extends('layouts.admin.app')
@section('content')
<div class="row">
  <div class="col-md-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="titre">{{$promotion->year}} - {{$promotion->school->name}} </div>
        <a href="/admin/promotion"><button type="button" name="button" class="btn btn-danger">Retour</button></a>
        <a href="{{url('/admin/promotion/edit/'.$promotion->id)}}"><button type="button" name="button" class="btn btn-warning">modifier</button></a>
        </div>
      <div class="panel-boby">
        <div class="table table-responsive">
          <table class="table">
            <tbody>

              <tr>
                <td>actuelle</td>
                @if($promotion->current)
                <td>&#9733;</td>
                @else
                <td></td>
                @endif
              </tr>
              <tr>
                <td>nom</td>
                <td>{{$promotion->school->name}}</td>
              </tr>
              <tr>
                <td>année</td>
                <td>{{$promotion->year}}</td>
              </tr>
              <tr>
                <td>Directrice</td>
                <td>{{$promotion->director_name}}</td>
              </tr>
              <tr>
                <td>Référent APJC</td>
                <td>Adhérent n°1</td>
              </tr>
              <tr>
                <td>Effectifs</td>
                <td>{{$promotion->total_student_effectives}}</td>
              </tr>
              <tr>
                <td>nbre de classe</td>
                <td>{{$promotion->nb_class}}</td>
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
        <div class="titre">Classes</div>
        <a href="{{url('/admin/promotion/create/classe/'.$promotion->id)}}"><button type="button" name="button" class="btn btn-success">Ajouter une Classes</button></a>
        </div>
      <div class="panel-boby">
        <div class="table table-responsive">
          <table class="table">
            <thead>
              <td>classe</td>
              <td>nbre</td>
              <td>Enseignant</td>
            </thead>
            <tbody>
              @foreach($promotion->classes as $classe)
              <tr>
                <td>{{$classe->type}}</td>
                <td>{{$classe->effectif}}</td>
                <td>{{$classe->professor_title}} {{$classe->professor_name}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="titre">Conseils d'école</div>
        <a href="#"><button type="button" name="button" class="btn btn-success">Ajouter un Conseil</button></a>
        </div>
      <div class="panel-boby">
        <h4>Dates des conseils</h4>
      <ul>
        <li>
          <label>Date : </label>
          <date>10/02/2017</date><br>
          <a href="#"><button type="button" class="btn btn-primary">voir le rapport</button></a>
        </li>
        <li>
          <label>Date : </label>
          <date>10/02/2017</date><br>
          <a href="#">voir le rapport</a>
        </li>
        <li>
          <label>Date : </label>
          <date>10/02/2017</date><br>
          <a href="#">voir le rapport</a>
        </li>
      </ul>
      <h4>Liste des parents élus</h4>
      <ul>
        <li>Mme Untel</li>
        <li>Mme Deuxtel</li>
        <li>Mme Troistel</li>
        <li>Mme Quatretel</li>
        <li>Mme Cinqtel</li>
        <li>Mme Sixtel</li>
        <li>Mme Septtel</li>
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
