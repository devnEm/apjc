@extends('layouts.admin.app')

@section('tools')
<div class="tools">
  <a href="{{url('/admin')}}"><button type="button" name="button" class="btn btn-danger">Annuler</button></a>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">Modifier rôle</div>
      <div class="panel-body">
        <div class="form-group">
          {!! Form::model($bureau,['url' => '/admin/association/delete_member/'.$bureau->id,'class' => 'form-horizontal']) !!}
          {{ csrf_field() }}
          <div class="form-group">
            {!! Form::label('adherent_id','nom : ',['class' => 'col-md-4 control-label']) !!}
            {!! Form::label('adherent',$bureau->adherent->name,['class' => 'control-label']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('president','president',['class' => 'col-md-4 control-label']) !!}
            {!! Form::checkbox('president',$bureau->president) !!}
          </div>
          <div class="form-group">
            {!! Form::label('secretaire','secretaire',['class' => 'col-md-4 control-label']) !!}
            {!! Form::checkbox('secretaire',$bureau->secretaire) !!}
          </div>
          <div class="form-group">
            {!! Form::label('comptable','comptable',['class' => 'col-md-4 control-label']) !!}
            {!! Form::checkbox('comptable',$bureau->comptable) !!}
          </div>
          @if(Auth::user())
            <div class="form-group">
              {!! Form::label('redacteur','redacteur',['class' => 'col-md-4 control-label']) !!}
              {!! Form::checkbox('redacteur',$bureau->redacteur) !!}
            </div>
          @endif
          <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
            {!! Form::submit('retirer',['class' => 'btn btn-danger']) !!}
            </div>
          </div>
          {!! Form::close() !!}
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
