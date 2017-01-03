@extends('layouts.admin.app')
@section('tools')
<div class="tools">
  <a href="/admin"><button type="button" name="button" class="btn btn-info">Retour</button></a>
  <a href="{{url('/admin/association/add_member')}}"><button type="button" name="button" class="btn btn-primary">ajouter un membre</button></a>
  {{-- <a href="{{url('/admin/redaction/create/category')}}"><button type="button" name="button" class="btn btn-primary">acceder au bureau</button></a> --}}
</div>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-info">
        <div class="panel-heading">le Bureau</div>
        <div class="panel-body">
          <h3>Membre du bureau</h3>
          <div class="table table-responsive">
            <table class="table">
              <thead>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Rôle</td>
                <td></td>

              </thead>
              <tbody>
                @if($bureau_members)
                  @foreach($bureau_members as $members)
                  <tr>
                    <td>{{$members->adherent->name}}</td>
                    <td>{{$members->adherent->first_name}}</td>

                    @if($members->president)
                      <td>Président</td>
                    @endif
                    @if($members->secretaire)
                      <td>Secrétaire</td>
                    @endif
                    @if($members->comptable)
                      <td>Comptable</td>
                    @endif
                    @if($members->redacteur)
                      <td>Rédacteur</td>
                    @endif
                    <td><a href="{{url('/admin/association/edit_member/'.$members->id)}}"><button type="button" name="button" class="btn btn-warning">modifier</button></a></td>
                  </tr>
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
