@extends('layouts.admin.app')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="titre">Ajouter une école</div>
        <a href="/admin/ecole"><button type="button" name="button" class="btn btn-danger">Annuler</button></a>
      </div>
      <div class="form-group">
        {!! Form::open(['url' => '/admin/ecole/create','class' => 'form-group']) !!}
        <div class="form-group">
          {!! Form::label('type','type d\'établissement : ',['class' => 'form-group']) !!}
          {!! Form::select('type',['maternelle'=>'maternelle','primaire'=>'primaire','collége'=>'collége'],['class' => 'form-group']) !!} <!-- TODO SELECT OPTION -->
        </div>
        <div class="form-group">
          {!! Form::label('name','nom de l\'école : ',['class' => 'form-group', 'type' => 'text']) !!}
          {!! Form::text('name',null,['placeholder' => 'Entre un nom']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('street','rue : ',['class' => 'form-group']) !!}
          {!! Form::text('street',null,['class' => 'form-group']) !!}

          {!! Form::label('city','ville : ',['class' => 'form-group']) !!}
          {!! Form::text('city','Athis-Mons',['class' => 'form-group']) !!}
        </div>

        <div class="form-group">
          {!! Form::submit('ajouter',['class' => 'btn btn-success']) !!}
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
