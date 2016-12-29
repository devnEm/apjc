@extends('layouts.admin.app')
@section('tools')
<div class="col-md-8 tools">
  <a href="/admin/promotion">
    <button type="button" name="button" class="btn btn-danger">Annuler</button>
  </a>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">Ajouter une promotion</div>
      <div class="panel-body">
          {!! Form::open(['url' => '/admin/promotion/create','class' => 'form-horizontal']) !!}
          <div class="form-group">
            {{ csrf_field() }}
            {!! Form::label('year','Millesime',['class' => 'col-md-4 control-label', 'type' => 'text']) !!}
            {!! Form::text('year',null,['class' => 'col-md-4', 'placeholder' => 'Respectez le format YYYY/YYYY' ]) !!}
            @if ($errors->has('year'))
                <div class="col-md-4">
                    <strong>{{ $errors->first('year') }}</strong>
                </div>
            @endif
          </div>
          <div class="form-group">
            {!! Form::label('current','Promotion acuelle',['class' => 'col-md-4 control-label', 'type' => 'text']) !!}
            {!! Form::checkbox('current',null) !!}
          </div>
            <div class="form-group">
              {!! Form::label('school_id','école',['class' => 'col-md-4 control-label', 'type' => 'text']) !!}
              {!! Form::select('school_id',$school,null,['id' => 'school_name','class' => 'col-md-4'],null) !!}
              @if (session('status'))
                  <div class="alert alert-danger">
                      {{ session('status') }}
                  </div>
              @endif
            </div>
            <div class="form-group">
              {!! Form::label('director_title','civilité',['class' => 'col-md-4 control-label']) !!}
              {!! Form::select('director_title',['Monsieur'=>'Mr','Madame'=> 'Mme'],null,['class' => 'col-md-4']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('director_name','nom du chef d\'établissement',['class' => 'col-md-4 control-label']) !!}
              {!! Form::text('director_name',null,['class' => 'col-md-4', 'placeholder' => 'Nom de chef d\'établissement']) !!}
              @if ($errors->has('director_name'))
                  <div class="col-md-4">
                      <strong>Un nom de chef d'établissement est requis</strong>
                  </div>
              @endif
            </div>
            <div class="form-group">
              {!! Form::label('director_firstname','prénom du chef d\'établissement',['class' => 'col-md-4 control-label']) !!}
              {!! Form::text('director_firstname',null,['class' => 'col-md-4', 'placeholder' => 'Prénom de chef d\'établissement']) !!}
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
