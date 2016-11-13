@extends('layouts.admin.app')
@section('content')
<div class="row">
  <div class="col-md-10">
    <div class="panel panel-info">
      <div class="panel-heading">Calmette</div>
      <div class="panel-boby">
        <div class="table">
          <table class="table">
            <tbody>
              <tr>
                <td>id</td>
                <td>1</td>
              </tr>
              <tr>
                <td>nom</td>
                <td>calmette</td>
              </tr>
              <tr>
                <td>année</td>
                <td>2016/2017</td>
              </tr>
              <tr>
                <td>Directrice</td>
                <td>Mme La directrice</td>
              </tr>
              <tr>
                <td>Référehnt APJC</td>
                <td>Adhérent n°1</td>
              </tr>
              <tr>
                <td>Effectifs</td>
                <td>250</td>
              </tr>
              <tr>
                <td>nbre de classe</td>
                <td>12</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table">
          <table class="table">
            <thead>
              <td>classe</td>
              <td>nbre</td>
              <td>Enseignant</td>
              <td>Accompagnant</td>
            </thead>
            <tbody>
              <tr>
                <td>CP1</td>
                <td>12</td>
                <td>Mme Laprof</td>
                <td>Mme Lassistante</td>
              </tr>
              <tr>
                <td>CP2</td>
                <td>12</td>
                <td>Mr Léduc</td>
                <td>Mme Lassistante</td>
              </tr>
              <tr>
                <td>CP2</td>
                <td>12</td>
                <td>Mr Léduc</td>
                <td>Mme Lassistante</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
