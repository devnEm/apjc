@extends('layouts.admin.app')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="titre">{{$promotion->year}} - {{$promotion->school_id}} </div>
        <a href="/admin/promotion"><button type="button" name="button" class="btn btn-danger">Retour</button></a>
        </div>
      <div class="panel-boby">
        <div class="table table-responsive">
          <table class="table">
            <tbody>
              <tr>
                <td>id</td>
                <td>{{$promotion->id}}</td>
              </tr>
              <tr>
                <td>nom</td>
                <td>{{$promotion->school_id}}</td>
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
        <div class="table">
          <table class="table">
            <thead>
              <td>classe</td>
              <td>nbre</td>
              <td>Enseignant</td>
              <td>Accompagnant</td>
            </thead>
            <tbody>
              <tr>
                <td>CP1</td>
                <td>12</td>
                <td>Mme Laprof</td>
                <td>Mme Lassistante</td>
              </tr>
              <tr>
                <td>CP2</td>
                <td>12</td>
                <td>Mr Léduc</td>
                <td>Mme Lassistante</td>
              </tr>
              <tr>
                <td>CP2</td>
                <td>12</td>
                <td>Mr Léduc</td>
                <td>Mme Lassistante</td>
              </tr>
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
