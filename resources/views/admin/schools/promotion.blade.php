@extends('layouts.admin.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
              <div class="titre">Promotions</div>
              <a href="/admin/promotion/create"><button type="button" name="button" class="btn btn-primary">ajouter</button></a>
            </div>
            <div class="panel-body">
                <div class="table table-responsive">
                  <table class="table">
                    <thead>
                      <td>id</td>
                      <td>année</td>
                      <td>type</td>
                      <td>nom</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>2016/2017</td>
                        <td>maternelle</td>
                        <td>Calmette</td>
                        <td><a href="/admin/promotion/1/show"><button type="button" name="button" class="btn btn-info">voir</button></a></td>
                        <td><a href="#"><button type="button" name="button" class="btn btn-warning">modifier</button></a></td>
                        <td><a href="#"><button type="button" name="button" class="btn btn-danger">supprimer</button></a></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>2016/2017</td>
                        <td>primaire</td>
                        <td>Jaures</td>
                        <td><a href="#"><button type="button" name="button" class="btn btn-info">voir</button></a></td>
                        <td><a href="#"><button type="button" name="button" class="btn btn-warning">modifier</button></a></td>
                        <td><a href="#"><button type="button" name="button" class="btn btn-danger">supprimer</button></a></td>
                      </tr>
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
