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
                      <td>courante</td>
                      <td></td>
                      <td></td>
                    </thead>
                    <tbody>
                      @foreach($promotions as $promotion)
                      <tr>
                        <td>{{$promotion->id}}</td>
                        <td>{{$promotion->year}}</td>
                        <td>{{$promotion->school->type}}</td>
                        <td>{{$promotion->school->name}}</td>
                        @if($promotion->current)
                        <td>&#9733;</td>
                        @else
                        <td></td>
                        @endif
                        <td><a href="{{url('/admin/promotion/show/'.$promotion->id)}}"><button type="button" name="button" class="btn btn-info">voir</button></a></td>
                        <td><a href="{{url('/admin/promotion/edit/'.$promotion->id)}}"><button type="button" name="button" class="btn btn-warning">modifier</button></a></td>
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
