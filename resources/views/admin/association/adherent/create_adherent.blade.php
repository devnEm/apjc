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
      <div class="panel-heading">Créer un Adhérent</div>
      <div class="panel-body">
        <div class="form-group">
          {!! Form::open(['url' => '/admin/association/create/adherent','class' => 'form-horizontal']) !!}
          {{ csrf_field() }}
          <div class="form-group">
            {!! Form::label('titre','civilité',['class' => 'col-md-4 control-label']) !!}
            {!! Form::select('titre',['Monsieur'=>'Monsieur','Madame'=> 'Madame'],null,['class' => 'col-md-4']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('name','nom',['class' => 'col-md-4 control-label', 'type' => 'text']) !!}
            {!! Form::text('name',null,['class' => 'col-md-4','placeholder' => 'Saisir un nom de famille']) !!}
            @if ($errors->has('name'))
                <div class="col-md-4">
                    <strong>Un nom de famille est requis</strong>
                </div>
            @endif
          </div>

          <div class="form-group">
            {!! Form::label('first_name','prénom',['class' => 'col-md-4 control-label']) !!}
            {!! Form::text('first_name',null,['class' => 'col-md-4','placeholder' => 'Saisir un prénom']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('email','email',['class' => 'col-md-4 control-label']) !!}
            {!! Form::text('email',null,['class' => 'col-md-4','placeholder' => 'Saisir un email valide']) !!}
            @if ($errors->has('email'))
                <div class="col-md-4">
                    <strong>{{ $errors->first('email') }}</strong>
                </div>
            @endif
          </div>
          <div class="form-group">
            {!! Form::label('phone','phone',['class' => 'col-md-4 control-label']) !!}
            {!! Form::text('phone',null,['class' => 'col-md-4','placeholder' => 'Saisir un numéro de téléphone']) !!}
            @if ($errors->has('phone'))
                <div class="col-md-4">
                    <strong>{{ $errors->first('phone') }}</strong>
                </div>
            @endif
          </div>
          <div class="form-group">
            {!! Form::label('hidden_phone','hidden_phone',['class' => 'col-md-4 control-label']) !!}
            {!! Form::checkbox('hidden_phone') !!}
          </div>
          <div class="form-group">
            {!! Form::label('email_subscription','email_subscription',['class' => 'col-md-4 control-label']) !!}
            {!! Form::checkbox('email_subscription',null,true) !!}
          </div>
          <div class="form-group">
            {!! Form::label('subscribed','subscribed',['class' => 'hidden']) !!}
            {!! Form::checkbox('subscribed',null,false,['class' => 'hidden']) !!}
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
