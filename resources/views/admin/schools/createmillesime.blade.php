@extends('layouts.admin.app')
@section('content')
<div class="row">
  <div class="col-md-10">
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="titre">Ajouter une promotion</div>
        <a href="/admin/millesime"><button type="button" name="button" class="btn btn-danger">Annuler</button></a>
      </div>
      <div class="panel-boby">
        <div class="form-group">
          {!! Form::open(['url' => '/admin/millesime/create','class' => 'form-group']) !!}
            <div class="form-group">
              {!! Form::label('etablissement','école',['class' => 'form-group', 'type' => 'text']) !!}
              {!! Form::text('etablissement',null,['placeholder' => 'Entre un nom']) !!}<!-- TODO SELECT OPTION -->
            </div>
            <div class="form-group">
              {!! Form::label('director_title','civilité',['class' => 'form-group']) !!}
              {!! Form::text('director_title',null,['class' => 'form-group']) !!} <!-- TODO SELECT OPTION -->
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
