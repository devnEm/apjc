@extends('layouts.admin.app')
@section('tools')
  <div class="col-md-8 tools">

  </div>
@endsection
@section('content')
  @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
  @endif
  <div class="row">
    <div class="panel panel-info">
      <div class="panel-heading">
        Adhérents
      </div>
      <div class="panel-body">
        @if(Auth::user()->admin || Auth::user()->adherent->bureau->president || Auth::user()->adherent->bureau->secretaire)
          <a href="/admin/association/create/adherent">
            <button type="button" class="btn btn-success">Ajouter un adhérent</button>
          </a>
        @endif
        @if(Auth::user()->admin || Auth::user()->adherent->bureau->president || Auth::user()->adherent->bureau->secretaire)
          <a href="#">
            <button type="button" class="btn btn-success">Communiquer aves les adhérents</button>
          </a>
        @endif
        <div class="table">
          <table class="table">
            <thead>
              <td>nom</td>
              <td>prénom</td>
              <td>email</td>
              <td></td>
            </thead>
            <tbody>
              @foreach ($adherents as $adherent)
                <tr>
                  <td>{{$adherent->first_name}}</td>
                  <td>{{$adherent->name}}</td>
                  <td>{{$adherent->email}}</td>
                  <td>
                    <a href="{{url('/admin/association/edit/adherent/'.$adherent->id)}}">
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
@endsection
@section('info')
  <div class="panel panel-info">
      <div class="panel-heading">Promotions</div>
      <div class="panel-body">
          <div class="table table-responsive">
            <table class="table table-bordered">
              <thead>
                <td>Année</td>
                <td>Ecole</td>
                <td></td>
              </thead>
              <tbody>
                @foreach($promotions as $promotion)
                <tr>
                  <td>{{$promotion->year}}</td>
                  <td>{{$promotion->school->name}}</td>
                  <td>
                    <a href="{{url('/admin/promotion/show/'.$promotion->id)}}">
                      <button type="button" name="button" class="btn btn-info btn-xs" style="width:100%">Superviser</button>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            @if(Auth::user()->admin || Auth::user()->adherent->bureau->president || Auth::user()->adherent->bureau->secretaire)
              <a href="/admin/promotion">
                <button type="button" name="button" class="btn btn-success" style="width:100%">Tout voir</button>
              </a>
            @endif
          </div>
      </div>
  </div>
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
          @if($member->comptable)
            <div class="row">
              <label>Trésorier : {{$member->adherent->name}}</label>
            </div>
          @endif
          @if($member->secretaire)
            <div class="row">
              <label>Secrétaire : {{$member->adherent->name}}</label>
            </div>
          @endif
        @endforeach
      @endif
      @if(Auth::user()->admin || Auth::user()->adherent->bureau->president)
      <div class="row">
        <a href="/admin/bureau">
          <button type="button" class="btn btn-success" style="width:100%">Modifier le Bureau</button>
        </a>
      </div>
      @endif
    </div>
  </div>
@endsection
