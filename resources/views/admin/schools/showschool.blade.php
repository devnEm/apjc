@extends('layouts.admin.app')
@section('content')
<div class="row">
  <div class="col-md-10">
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="titre">Calmette</div>
        <a href="/admin/ecole"><button type="button" name="button" class="btn btn-danger">Retour</button></a>
        </div>
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
                <td>Référent APJC</td>
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
      </div>
    </div>
  </div>
</div>
@endsection
