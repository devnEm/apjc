@extends('layouts.admin.app')
@section('tools')
<div class="tools">
  <a href="/admin"><button type="button" name="button" class="btn btn-info">Retour</button></a>
  <a href="{{url('/admin/association/create/adherent')}}"><button type="button" name="button" class="btn btn-primary">ajouter un adherent</button></a>
  {{-- <a href="{{url('/admin/redaction/create/category')}}"><button type="button" name="button" class="btn btn-primary">acceder au bureau</button></a> --}}
</div>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-info">
        <div class="panel-heading">l' Association</div>
        <div class="panel-body">
          <h4>filtres</h4>
          <h3>Liste des adhérents</h3>
          <div class="table table-responsive">
            <table class="table">
              <thead>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Bureau</td>
                <td></td>

              </thead>
              <tbody>
                @if($adherents)
                  @foreach($adherents as $adherent)
                    @if($adherent->id !== 1)
                      <tr>
                        <td>{{$adherent->name}}</td>
                        <td>{{$adherent->first_name}}</td>
                        @if(!$adherent->bureau)
                          <td>Adhérent</td>
                          @elseif($adherent->bureau->president)
                            <td>Président</td>
                          @elseif($adherent->bureau->secretaire)
                            <td>Secrétaire</td>
                          @elseif($adherent->bureau->comptable)
                            <td>Comptable</td>
                          @elseif($adherent->bureau->redacteur)
                            <td>redacteur</td>
                        @endif
                        <td><a href="{{url('/admin/association/edit/adherent/'.$adherent->id)}}"><button type="button" name="button" class="btn btn-warning">modifier</button></a></td>
                      </tr>
                    @endif
                  @endforeach
                @endif
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
