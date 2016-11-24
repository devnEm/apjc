@extends('layouts.admin.app')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        Modifier une école
        <a href="/admin/ecole"><button type="button" name="button" class="btn btn-success">Annuler</button></a>
      </div>
      <div class="panel_body">
          {!! Form::model($school, ['url' =>'/admin/ecole/update/'.$school->id,'class' => 'form-horizontal']) !!}
          <div class="form-group">
            {!! Form::label('type','type',['class' => 'col-md-4 control-label']) !!}
            {!! Form::select('type',['maternelle'=>'maternelle','primaire'=>'primaire','collége'=>'collége'],$school->type) !!} <!-- TODO SELECT OPTION -->
          </div>
          <div class="form-group">
            {!! Form::label('name','nom de l\'école',['class' => 'col-md-4 control-label']) !!}
            {!! Form::text('name',null,['placeholder' => 'Entre un nom']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('street','rue',['class' => 'col-md-4 control-label']) !!}
            {!! Form::text('street',null) !!}
          </div>
          <div class="form-group">
            {!! Form::label('city','ville',['class' => 'col-md-4 control-label']) !!}
            {!! Form::text('city',null) !!}
          </div>

          <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
            {!! Form::submit('modifier',['class' => 'btn btn-success']) !!}

          {!! Form::close() !!}
          <a href="{{url('/admin/ecole/delete/'.$school->id)}}"><button class="btn btn-danger">supprimer</button></a>
          </div>
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
