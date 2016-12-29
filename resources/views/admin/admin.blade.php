@extends('layouts.admin.app')
@section('content')
  @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
  @endif
<div class="row">
  <div class="col-md-6">
    <div class="panel panel-info">
        <div class="panel-heading">Adhérents</div>
        <div class="panel-body">
          <div class="row">
            <label>Nbr d'inscrit : {{count($adherents)}}</label>
          </div>
          <div class="row">
            <label>Budget appro : {{count($adherents)}}</label>
          </div>
            <div class="row">
              @if(Auth::user()->admin || Auth::user()->adherent->bureau->president || Auth::user()->adherent->bureau->secretaire)
                <a href="/admin/association/create/adherent">
                  <button type="button" class="btn btn-success btn-xs" style="width:100%">Ajouter un adhérent</button>
                </a>
              @endif
              <a href="/admin/association/adherents">
                <button type="button" class="btn btn-success btn-xs" style="width:100%">Suivi des adhérent</button>
              </a>
              @if(Auth::user()->admin || Auth::user()->adherent->bureau->president || Auth::user()->adherent->bureau->secretaire)
                <a href="#">
                  <button type="button" class="btn btn-success btn-xs" style="width:100%">Communiquer aves les adhérents</button>
                </a>
              @endif
            </div>
        </div>
    </div>
  </div>
    <div class="col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">Bureau</div>
            <div class="panel-body">
              @if(count($bureau_members) !== 0)
                @foreach($bureau_members as $member)
                  @if($member->president)
                  <div class="row">
                    <label>Président : {{$member->adherent->name}}</label>
                  </div>
                  @endif
                  {{-- <div class="row">
                    <label><i>vice : </i></label>
                  </div> --}}
                  @if($member->comptable)
                  <div class="row">
                    <label>Trésorier : {{$member->adherent->name}}</label>
                  </div>
                  @endif
                  {{-- <div class="row">
                    <label><i>vice : {{count($users)}}</i></label>
                  </div> --}}
                  @if($member->secretaire)
                  <div class="row">
                    <label>Secrétaire : {{$member->adherent->name}}</label>
                  </div>
                  @endif
                  {{-- <div class="row">
                    <label><i>vice : {{count($users)}}</i></label>
                  </div> --}}
                @endforeach
              @endif
              @if(Auth::user()->admin || Auth::user()->adherent->bureau->president)
              <div class="row">
                <a href="/admin/association/add_member">
                  <button type="button" class="btn btn-primary" style="width:100%">Ajouter un membre</button>
                </a>
                <a href="/admin/bureau">
                  <button type="button" class="btn btn-success" style="width:100%">Modifier les rôles</button>
                </a>
              </div>
              @endif
            </div>
        </div>
    </div>
</div>
@if(Auth::user()->admin || Auth::user()->adherent->bureau->president || Auth::user()->adherent->bureau->secretaire)
<div class="row">
  <div class="col-md-6">
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
@endif
@if(Auth::user()->admin)
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
@endif
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
