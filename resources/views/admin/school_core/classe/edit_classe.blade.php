@extends('layouts.admin.app')
@section('tools')
<div class="col-md-8 tools">
  <a href="/admin/promotion/show/{{$classe->promotion->id}}"><button type="button" name="button" class="btn btn-info">Retour</button></a>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">Modifier une Classe</div>
      <div class="panel-body">
          {!! Form::model($classe, ['url' => '/admin/promotion/classe/update/'.$classe->id,'class' => 'form-horizontal']) !!}
          <div class="form-group">
            {!! Form::label('Ecole','ecole : ',['class' => 'col-md-4 control-label', 'type' => 'text']) !!}
            {!! Form::label('ecole',$classe->promotion->school->name) !!}
          </div>
          <div class="form-group">
            {!! Form::label('Ecole','promotion : ',['class' => 'col-md-4 control-label', 'type' => 'text']) !!}
            {!! Form::label('ecole',$classe->promotion->year) !!}
          </div>
          <div class="form-group">
            {!! Form::label('type','type',['class' => 'col-md-4 control-label', 'type' => 'text']) !!}
            {!! Form::text('type',$classe->type) !!}
          </div>
          <div class="form-group">
            {!! Form::label('professor_title','civilité',['class' => 'col-md-4 control-label']) !!}
            {!! Form::select('professor_title',['Monsieur'=>'Mr','Madame'=> 'Mme'],$classe->professor_title) !!}
          </div>
          <div class="form-group">
            {!! Form::label('professor_name','Nom du professeur',['class' => 'col-md-4 control-label']) !!}
            {!! Form::text('professor_name',$classe->professor_name) !!}
          </div>
          <div class="form-group">
            {!! Form::label('professor_firstname','Prénom du professeur',['class' => 'col-md-4 control-label']) !!}
            {!! Form::text('professor_firstname',$classe->professor_firstname) !!}
          </div>
          <div class="form-group">
            {!! Form::label('effectif','effectif',['class' => 'col-md-4 control-label']) !!}
            {!! Form::text('effectif',$classe->effectif) !!}
          </div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
            {!! Form::submit('modifier',['class' => 'btn btn-warning']) !!}
              <a href="{{url('/admin/promotion/classe/delete/'.$classe->id)}}">
                <button type="button" name="button" class="btn btn-danger">supprimer</button>
              </a>
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
