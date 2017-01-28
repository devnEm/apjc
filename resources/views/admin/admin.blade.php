@extends('layouts.admin.app')
@section('content')
  @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
  @endif
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">Général</div>
      <div class="panel-body">
        <div class="row">
          <label>Nbr d'utilisateurs : {{count($users)}}</label>
        </div>
        <div class="row">
          <div class="table">
            <table class="table">
              <thead>
                <td>nom</td>
                <td>prénom</td>
                <td>role</td>
                <td>email</td>
                <td></td>
              </thead>
              <tbody>
                @foreach ($users as $user)
                  <tr>
                    <td>{{$user->adherent->first_name}}</td>
                    <td>{{$user->adherent->name}}</td>
                    <td>
                      @if($user->adherent->bureau)
                        @if($user->adherent->bureau->president)
                          Président
                        @endif
                        @if($user->adherent->bureau->secretaire)
                          Secrétaire
                        @endif
                        @if($user->adherent->bureau->comptable)
                          Comptable
                        @endif
                        @if($user->adherent->bureau->redacteur)
                          Rédacteur
                        @endif
                      @else
                        Administrateur
                      @endif
                    </td>
                    <td>{{$user->email}}</td>
                    <td>
                      <a href="{{url('/admin/association/edit/adherent/'.$user->adherent->id)}}">
                        <button type="button" name="button" class="btn btn-info">Editer</button>
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
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
        <div class="panel-heading">Ecoles</div>
        <div class="panel-body">
          <div class="table table-responsive">
            <table class="table table-bordered">
              <thead>
                <td>nom</td>
                <td></td>
              </thead>
              <tbody>
                @foreach($schools as $school)
                <tr>
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
@endsection
