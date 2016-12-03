@extends('layouts.admin.app')
@section('content')
<div class="row">
  <div class="col-md-6">
    <div class="panel panel-info" style="height:200px">
        <div class="panel-heading">Adhérents</div>
        <div class="panel-body">
          <div class="row">
            <label>Nbr d'inscrit : {{count($users)}}</label>
          </div>
          <div class="row">
            <button type="button" class="btn btn-primary btn-sm">Ajouter un adhérent</button>
            <button type="button" class="btn btn-success btn-sm">Gérer les adhérent</button>
            <button type="button" class="btn btn-warning btn-sm">Envoyer des mails</button>
          </div>
        </div>
    </div>
  </div>
    <div class="col-md-6">
        <div class="panel panel-info" style="height:200px">
            <div class="panel-heading">Bureau</div>
            <div class="panel-body">
              <div class="row">
                <label>Nbr d'inscrit : {{count($users)}}</label>
              </div>
              <div class="row">
                <button type="button" class="btn btn-primary">Ajouter un membre</button>
                <button type="button" class="btn btn-success">Modifier les rôles</button>
              </div>
              <!-- <hr>
                <div class="table table-responsive">
                  <table class="table">
                    <thead>
                      <td>id</td>
                      <td>nom</td>
                      <td>email</td>
                      <td>admin</td>
                    </thead>
                    <tbody>
                      @foreach($users as $user)
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>@if($user->admin) true @else false @endif</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div> -->
            </div>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        Admin-site ZONE
      </div>
      <div class="panel-body">
        Admin-site ZONE
        Acces à la gestion des messages d'informations du sites
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
