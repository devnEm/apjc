@extends('layouts.admin.app')
@section('tools')
<div class="col-md-8 tools">
  <a href="/admin">
    <button type="button" name="button" class="btn btn-info">Retour</button>
  </a>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">{{$school->name}}</div>
      <div class="panel-body">
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
