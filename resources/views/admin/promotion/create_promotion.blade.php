@extends('layouts.admin.app')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="titre">Ajouter une promotion</div>
        <a href="/admin/promotion"><button type="button" name="button" class="btn btn-danger">Annuler</button></a>
      </div>
      <div class="panel-boby">
        <div class="form-group">
          {!! Form::open(['url' => '/admin/promotion/create','class' => 'form-group']) !!}
          <div class="form-group">
            {!! Form::label('year','Millesime',['class' => 'form-group', 'type' => 'text']) !!}
            {!! Form::text('year',null,['class' => 'form-group']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('current','Promotion acuelle',['class' => 'form-group', 'type' => 'text']) !!}
            {!! Form::checkbox('current',null,['class' => 'form-group']) !!}
          </div>
            <div class="form-group">
              {!! Form::label('school_name','école',['class' => 'form-group', 'type' => 'text']) !!}
              {!! Form::select('school_name[]',$school,null,['id' => 'school_name','class' => 'form-group']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('director_title','civilité',['class' => 'form-group']) !!}
              {!! Form::select('director_title',['Monsieur'=>'Mr','Madame'=> 'Mme'],null,['class' => 'form-group']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('director_name','nom du chef d\'établissement',['class' => 'form-group']) !!}
              {!! Form::text('director_name',null,['class' => 'form-group']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('director_firstname','prénom du chef d\'établissement',['class' => 'form-group']) !!}
              {!! Form::text('director_firstname',null,['class' => 'form-group']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('total_student_effectives','nombre d\'élèves',['class' => 'form-group']) !!}
              {!! Form::text('total_student_effectives',null,['class' => 'form-group']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('nb_class','nombre de classe',['class' => 'form-group']) !!}
              {!! Form::text('nb_class',null,['class' => 'form-group']) !!}
            </div>
            <div class="form-group">
              {!! Form::submit('ajouter',['class' => 'btn btn-success']) !!}
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
