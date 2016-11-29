@extends('layouts.admin.app')
@section('tools')
<div class="col-md-8 tools">
  <a href="/admin/promotion">
    <button type="button" name="button" class="btn btn-danger">&#215; Annuler</button>
  </a>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">Modifier une promotion</div>
      <div class="panel-body">
          {!! Form::model($promotion, ['url' => '/admin/promotion/update/'.$promotion->id,'class' => 'form-horizontal']) !!}
          <div class="form-group">
            {!! Form::label('year','Millesime',['class' => 'col-md-4 control-label', 'type' => 'text']) !!}
            {!! Form::text('year',null) !!}
          </div>
          <div class="form-group">
            {!! Form::label('current','Promotion acuelle',['class' => 'col-md-4 control-label', 'type' => 'text']) !!}
            {!! Form::checkbox('current',1,$promotion->current) !!}
          </div>
          <div class="form-group">
            {!! Form::label('etablissement','école',['class' => 'col-md-4 control-label', 'type' => 'text']) !!}
            {!! Form::select('school_name',$school,$promotion->school_id,['id' => 'school_name']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('director_title','civilité',['class' => 'col-md-4 control-label']) !!}
            {!! Form::select('director_title',['Monsieur'=>'Mr','Madame'=> 'Mme'],null) !!}
          </div>
          <div class="form-group">
            {!! Form::label('director_name','nom du chef d\'établissement',['class' => 'col-md-4 control-label']) !!}
            {!! Form::text('director_name',null) !!}
          </div>
          <div class="form-group">
            {!! Form::label('director_firstname','prénom du chef d\'établissement',['class' => 'col-md-4 control-label']) !!}
            {!! Form::text('director_firstname',null) !!}
          </div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
            {!! Form::submit('modifier',['class' => 'btn btn-warning']) !!}
            {!! Form::close() !!}
            <a href="{{url('/admin/promotion/delete/'.$promotion->id)}}">
              <button type="button" name="button" class="btn btn-danger">supprimer</button>
            </a>
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
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </div>
</div>
@endsection
