@extends('layouts.admin.app')
@section('tools')
<div class="col-md-8 tools">
  <a href="/admin/ecole/create">
    <button type="button" name="button" class="btn btn-primary">Ajouter</button>
  </a>
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="panel panel-info">
          <div class="panel-heading">Ecoles</div>
          <div class="panel-body">
            <div class="table table-responsive">
              <table class="table">
                <thead>
                  <td>id</td>
                  <td>type</td>
                  <td>nom</td>
                  <td>classes</td>
                  <td></td>
                  <td></td>
                </thead>
                <tbody>
                  @foreach($schools as $school)
                  <tr>
                    <td>{{$school->id}}</td>
                    <td>{{$school->type}}</td>
                    <td>{{$school->name}}</td>
                    <td><a href="{{ url('/admin/ecole/show', $school->id ) }}"><button type="button" name="button" class="btn btn-info">voir</button></a></td>
                    <td><a href="{{ url('/admin/ecole/edit', $school->id ) }}"><button type="button" name="button" class="btn btn-warning">modifier</button></a></td>
                  </tr>
                  @endforeach
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
