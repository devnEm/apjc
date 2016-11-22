@extends('layouts.admin.app')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="titre">Ajouter une Classe</div>
        <a href="{{url('/admin/promotion/show/'.$promotion->id)}}"><button type="button" name="button" class="btn btn-danger">Annuler</button></a>
      </div>
      <div class="panel-boby">
        <div class="form-group">
          {!! Form::open(['url' => '/admin/promotion/create/classe/'.$promotion->id,'class' => 'form-group']) !!}
          <div class="form-group">
            {!! Form::label('promotion_id','promotion_id',['class' => 'hidden', 'type' => 'text']) !!}
            {!! Form::text('promotion_id',$promotion->id,['class' => 'hidden']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('Ecole','ecole : ',['class' => 'form-group', 'type' => 'text']) !!}
            {!! Form::label('ecole',$promotion->school->name,['class' => 'form-group']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('Ecole','promotion : ',['class' => 'form-group', 'type' => 'text']) !!}
            {!! Form::label('ecole',$promotion->year,['class' => 'form-group']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('type','type',['class' => 'form-group', 'type' => 'text']) !!}
            {!! Form::text('type',null,['class' => 'form-group']) !!}
          </div>
            <div class="form-group">
              {!! Form::label('professor_title','civilité',['class' => 'form-group']) !!}
              {!! Form::select('professor_title',['Monsieur'=>'Mr','Madame'=> 'Mme'],null,['class' => 'form-group']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('professor_name','Nom du professeur',['class' => 'form-group']) !!}
              {!! Form::text('professor_name',null,['class' => 'form-group']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('professor_firstname','Prénom du professeur',['class' => 'form-group']) !!}
              {!! Form::text('professor_firstname',null,['class' => 'form-group']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('effectif','effectif',['class' => 'form-group']) !!}
              {!! Form::text('effectif',null,['class' => 'form-group']) !!}
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
