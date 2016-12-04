@extends('layouts.admin.app')
@section('content')
<div class="row">
  <div class="col-md-6">
    <div class="panel panel-info">
        <div class="panel-heading">Adhérents</div>
        <div class="panel-body">
          <div class="row">
            <label>Nbr d'inscrit : {{count($users)}}</label>
          </div>
          <div class="row">
            <label>Budget appro : {{count($users)}}</label>
          </div>
          <div class="row">
            <a href="#">
              <button type="button" class="btn btn-success btn-xs" style="width:100%">Ajouter un adhérent</button>
            </a>
            <a href="#">
              <button type="button" class="btn btn-success btn-xs" style="width:100%">Suivi des adhérent</button>
            </a>
            <a href="#">
              <button type="button" class="btn btn-success btn-xs" style="width:100%">Communiquer aves les adhérents</button>
            </a>
          </div>
        </div>
    </div>
  </div>
    <div class="col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">Bureau</div>
            <div class="panel-body">
              <div class="row">
                <label>Président : {{count($users)}}</label>
              </div>
              <div class="row">
                <label><i>vice : {{count($users)}}</i></label>
              </div>
              <div class="row">
                <label>Trésorier : {{count($users)}}</label>
              </div>
              <div class="row">
                <label><i>vice : {{count($users)}}</i></label>
              </div>
              <div class="row">
                <label>Secrétaire : {{count($users)}}</label>
              </div>
              <div class="row">
                <label><i>vice : {{count($users)}}</i></label>
              </div>
              <div class="row">
                <a href="#">
                  <button type="button" class="btn btn-primary" style="width:100%">Ajouter un membre</button>
                </a>
                <a href="#">
                  <button type="button" class="btn btn-success" style="width:100%">Modifier les rôles</button>
                </a>
              </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="panel panel-info">
        <div class="panel-heading">Ecoles</div>
        <div class="panel-body">
          <div class="table table-responsive">
            <table class="table table-bordered">
              <thead>
                <td>type</td>
                <td>nom</td>
                <td></td>
              </thead>
              <tbody>
                @foreach($schools as $school)
                <tr>
                  <td>{{$school->type}}</td>
                  <td>{{$school->name}}</td>
                  <td>
                    <a href="{{ url('/admin/ecole/show', $school->id ) }}">
                      <button type="button" name="button" class="btn btn-info btn-xs">voir</button>
                    </a>
                    <a href="{{ url('/admin/ecole/edit', $school->id ) }}">
                      <button type="button" name="button" class="btn btn-warning btn-xs">modifier</button>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <a href="/admin/ecole/create">
              <button type="button" name="button" class="btn btn-success">Ajouter</button>
            </a>
          </div>
        </div>
      </div>
  </div>
    <div class="col-md-6">
      <div class="panel panel-info">
          <div class="panel-heading">Promotions</div>
          <div class="panel-body">
              <div class="table table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <td>Ecole</td>
                    <td>actions</td>
                  </thead>
                  <tbody>
                    @foreach($promotions as $promotion)
                    <tr>
                      <td>{{$promotion->school->name}}</td>
                      <td>
                        <a href="{{url('/admin/promotion/show/'.$promotion->id)}}">
                          <button type="button" name="button" class="btn btn-info btn-xs">voir</button>
                        </a>
                        <a href="{{url('/admin/promotion/edit/'.$promotion->id)}}">
                          <button type="button" name="button" class="btn btn-warning btn-xs">modifier</button>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <a href="/admin/promotion">
                  <button type="button" name="button" class="btn btn-success">Voir plus</button>
                </a>
              </div>
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
        +
        Qui sommes nous
      </div>
    </div>
  </div>
</div>
@endsection
@section('info')
<div class="panel panel-info">
  <div class="panel-heading">Elections</div>
  <div class="panel-body">
    <div class="table table-responsive">
      <table class="table table-bordered">
        <thead>
          <td>ecole</td>
          <td>actions</td>
        </thead>
        <tbody>
          @foreach($elections as $election)
          <tr>
            <td>{{$election->promotion->school->name}}</td>
            <td>
              <a href="{{url('/admin/election/show/'.$election->promotion->id)}}">
                <button type="button" name="button" class="btn btn-info btn-xs">voir</button>
              </a>
              <a href="{{url('/admin/election/edit/'.$election->id)}}">
                <button type="button" name="button" class="btn btn-warning btn-xs">modifier</button>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
