@extends('layouts.admin.app')
@section('tools')
<div class="col-md-8 tools">
  <a href="/admin">
    <button type="button" name="button" class="btn btn-info">Retour</button>
  </a>
  <a href="{{url('/admin/ecole/delete/'.$school->id)}}" class="col-md-4">
    <button class="btn btn-danger">supprimer</button>
  </a>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">Modifier une école</div>
      <div class="panel-body">
          {!! Form::model($school, ['url' =>'/admin/ecole/update/'.$school->id,'class' => 'form-horizontal']) !!}
          {{ csrf_field() }}
          <div class="form-group">
            {!! Form::label('type','* type d\'établissement',['class' => 'col-md-4 control-label']) !!}
            {!! Form::select('type',['maternelle'=>'maternelle','primaire'=>'primaire','collége'=>'collége'],$school->type) !!}
            @if ($errors->has('type'))
                <div class="col-md-4">
                  <strong>Un type d'établissement doit être renseigné</strong>
                </div>
            @endif
          </div>
          <div class="form-group">
            {!! Form::label('name','* nom de l\'école',['class' => 'col-md-4 control-label']) !!}
            {!! Form::text('name',null,['class'=>'col-md-4']) !!}
            @if ($errors->has('name'))
                <div class="col-md-4">
                    <strong>Le nom de l'école doit être renseigné</strong>
                </div>
            @endif
          </div>
          <div class="form-group">
            {!! Form::label('street','rue',['class' => 'col-md-4 control-label']) !!}
            {!! Form::text('street',$school->street) !!}
          </div>
          <div class="form-group">
            {!! Form::label('city','ville',['class' => 'col-md-4 control-label']) !!}
            {!! Form::text('city',$school->city) !!}
          </div>

          <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
            {!! Form::submit('modifier',['class' => 'btn btn-warning']) !!}

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
