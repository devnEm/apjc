@extends('layouts.admin.app')
@section('tools')
<div class="col-md-8 tools">
  <a href="{{url('/admin/promotion/show/'.$promotion->id)}}"><button type="button" name="button" class="btn btn-danger">Annuler</button></a>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">Ajouter une Classe</div>
      <div class="panel-body">
          {!! Form::open(['url' => '/admin/promotion/create/classe/'.$promotion->id,'class' => 'form-horizontal']) !!}
          <div class="form-group">
            {!! Form::label('promotion_id','promotion_id',['class' => 'hidden', 'type' => 'text']) !!}
            {!! Form::text('promotion_id',$promotion->id,['class' => 'hidden']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('Ecole','ecole : ',['class' => 'col-md-4 control-label', 'type' => 'text']) !!}
            {!! Form::label('ecole',$promotion->school->name) !!}
          </div>
          <div class="form-group">
            {!! Form::label('Ecole','promotion : ',['class' => 'col-md-4 control-label', 'type' => 'text']) !!}
            {!! Form::label('ecole',$promotion->year) !!}
          </div>
          <div class="form-group">
            {!! Form::label('type','type',['class' => 'col-md-4 control-label', 'type' => 'text']) !!}
            {!! Form::text('type',null) !!}
          </div>
          <div class="form-group">
            {!! Form::label('professor_title','civilité',['class' => 'col-md-4 control-label']) !!}
            {!! Form::select('professor_title',['Monsieur'=>'Mr','Madame'=> 'Mme'],null) !!}
          </div>
          <div class="form-group">
            {!! Form::label('professor_name','Nom du professeur',['class' => 'col-md-4 control-label']) !!}
            {!! Form::text('professor_name',null) !!}
          </div>
          <div class="form-group">
            {!! Form::label('professor_firstname','Prénom du professeur',['class' => 'col-md-4 control-label']) !!}
            {!! Form::text('professor_firstname',null) !!}
          </div>
          <div class="form-group">
            {!! Form::label('effectif','effectif',['class' => 'col-md-4 control-label']) !!}
            {!! Form::text('effectif',null) !!}
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
