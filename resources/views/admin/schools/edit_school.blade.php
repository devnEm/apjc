@extends('layouts.admin.app')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="titre">Modifier une école</div>
        <a href="/admin/ecole"><button type="button" name="button" class="btn btn-success">Annuler</button></a>
      </div>
      <div class="panel_body">
        <div class="form-group">
          {!! Form::model($school, ['url' =>'/admin/ecole/update/'.$school->id,'class' => 'form-group']) !!}
          <div class="form-group">
            {!! Form::label('type','type',['class' => 'form-group']) !!}
            {!! Form::text('type',null,['class' => 'form-group']) !!} <!-- TODO SELECT OPTION -->
          </div>
          <div class="form-group">
            {!! Form::label('name','nom de l\'école',['class' => 'form-group', 'type' => 'text']) !!}
            {!! Form::text('name',null,['placeholder' => 'Entre un nom']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('street','rue',['class' => 'form-group']) !!}
            {!! Form::text('street',null,['class' => 'form-group']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('city','ville',['class' => 'form-group']) !!}
            {!! Form::text('city',null,['class' => 'form-group']) !!}
          </div>

          <div class="form-group">
            {!! Form::submit('modifier',['class' => 'btn btn-success']) !!}
          </div>
          {!! Form::close() !!}
          <a href="{{url('/admin/ecole/delete/'.$school->id)}}"><button class="btn btn-danger">supprimer</button></a>
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
