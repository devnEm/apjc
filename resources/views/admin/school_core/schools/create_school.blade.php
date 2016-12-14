@extends('layouts.admin.app')
@section('tools')
<div class="col-md-8 tools">
  <a href="/admin">
    <button type="button" name="button" class="btn btn-danger">Annuler</button>
  </a>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">Ajouter une école</div>
      <div class="panel-body">
        {!! Form::open(['url' => '/admin/ecole/create','class' => 'form-horizontal']) !!}
        <div class="form-group">
          {{ csrf_field() }}
          {!! Form::label('type','type d\'établissement : ',['class' => 'col-md-4 control-label']) !!}
          {!! Form::select('type',['maternelle'=>'maternelle','primaire'=>'primaire','collége'=>'collége'],['class' => 'form-group']) !!} <!-- TODO SELECT OPTION -->
        </div>
        <div class="form-group">
          {!! Form::label('name','nom de l\'école : ',['class' => 'col-md-4 control-label', 'type' => 'text']) !!}
          {!! Form::text('name',null,['placeholder' => 'Entre un nom']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('street','rue : ',['class' => 'col-md-4 control-label']) !!}
          {!! Form::text('street',null) !!}
        </div>
        <div class="form-group">
          {!! Form::label('city','ville : ',['class' => 'col-md-4 control-label']) !!}
          {!! Form::text('city','Athis-Mons') !!}
        </div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-4">
          {!! Form::submit('ajouter',['class' => 'btn btn-success']) !!}
          </div>
        </div>
        {!! Form::close() !!}
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
