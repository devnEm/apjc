@extends('layouts.admin.app')
@section('content')
<div>
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">Elections</div>
      <div class="panel-body">
        <div class="table table-responsive">
          <table class="table">
            <thead>
              <td>ecole</td>
              <td>promotion</td>
              <td>date</td>
              <td></td>
            </thead>
            <tbody>
              @foreach($elections as $election)
              <tr>
                <td>{{$election->promotion->school->name}}</td>
                <td>{{$election->promotion->year}}</td>
                <td>{{$election->date}}</td>
                <td><a href="{{url('/admin/election/show/'.$election->promotion->id)}}"><button type="button" name="button" class="btn btn-info">voir</button></a></td>
                <td><a href="{{url('/admin/election/edit/'.$election->id)}}"><button type="button" name="button" class="btn btn-warning">modifier</button></a></td>
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
