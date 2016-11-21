@extends('layouts.admin.app')
@section('content')
<div class="row">
    <div class="col-md-2">
        <div class="panel panel-info">
            <div class="panel-heading">Inscrits</div>
            <div class="panel-body">
                {{count($users)}}
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="panel panel-info">
            <div class="panel-heading">Dashboard</div>
            <div class="panel-body">
                You are in admin!
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="panel panel-info">
            <div class="panel-heading">Dashboard</div>
            <div class="panel-body">
                You are in admin!
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="panel panel-info">
            <div class="panel-heading">Dashboard</div>
            <div class="panel-body">
                You are in admin!
            </div>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-body">
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
