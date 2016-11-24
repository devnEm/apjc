@extends('layouts.admin.app')
@if($promotion->election)
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
        <div class="panel-heading">Election</div>
        <div class="panel-body">
          <div class="col-md-6">
            <div class="row">
              <h4>Général</h4>
              <label>date</label>
              <span class="pull-right">{{$promotion->election->date}}</span>
              </br>
              <label>sieges_totaux</label>
              <span class="pull-right">{{$promotion->election->sieges_totaux}}</span>
              </br>
              <label>sieges_obtenus</label>
              <span class="pull-right">{{$promotion->election->sieges_obtenus}}</span>
              </br>
              <label>participation</label>
              <span class="pull-right">{{$promotion->election->participation}} %</span>
              </br>
              <label>nb_votant</label>
              <span class="pull-right">{{$promotion->election->nb_votant}}</span>
              </br>
              <label>nb_electeur</label>
              <span class="pull-right">{{$promotion->election->nb_electeur}}</span>
            </div>
          <hr>
            <div class="row">
              <a href="#"><button type="button" name="button" class="btn btn-warning">Modifier</button></a>
              <a href="#"><button type="button" name="button" class="btn btn-primary">Les candidats</button></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="table table_reponsive">
              <h4>Parents élus</h4>
              <table class="table">
                <thead>
                  <td>nom</td>
                  <td>prénom</td>
                  <td>elu</td>
                  <td>suppleant</td>
                </thead>
                <tbody>
                  @for ($i = 0; $i < $promotion->election->sieges_obtenus; $i++)
                  <tr>
                    <td>&nbsp;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  @endfor
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection
@else
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
        <div class="panel-heading">Election</div>
        <div class="panel-body">
          <a href="{{url('/admin/election/create/'.$promotion->id)}}">
            <button type="button" name="button" class="btn btn-success">Ajouter l'élection</button>
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
@endif
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
