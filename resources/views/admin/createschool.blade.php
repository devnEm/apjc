@extends('layouts.admin.app')
@section('content')
<div class="row">
  <div class="col-md-10">
    <div class="panel panel-info">
      <div class="panel-heading">Ajouter une école</div>
      <div class="panel-boby">
        <div class="form-group">
          {!! Form::open(['url' => '/admin/ecole/create','class' => 'form-group']) !!}
            <div class="form-group">
              {!! Form::label('nom','nom de l\'école',['class' => 'form-group']) !!}
              {!! Form::text('nom',null,['class' => 'form-group','placeholder' => 'Entre un nom']) !!}
            </div>
            <div class="form-group">
              {!! Form::submit('ajouter') !!}
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
