@extends('layouts.admin.app')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="titre">Calmette</div>
        <a href="/admin/ecole"><button type="button" name="button" class="btn btn-danger">Retour</button></a>
        </div>
      <div class="panel-boby">
        <div class="table table-responsive">
          <table class="table">
            <tbody>
              <tr>
                <td>id</td>
                <td>{{$school->id}}</td>
              </tr>
              <tr>
                <td>nom</td>
                <td>{{$school->name}}</td>
              </tr>
              <tr>
                <td>Référent APJC</td>
                <td>Adhérent n°1</td>
              </tr>
              <tr>
                <td>Effectifs</td>
                <td>1234</td>
              </tr>
              <tr>
                <td>nbre de classe</td>
                <td>25</td>
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
