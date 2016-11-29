@extends('layouts.admin.app')

@section('tools')
<div class="tools">
  <a href="{{url('/admin/redaction')}}"><button type="button" name="button" class="btn btn-danger">Annuler</button></a>
</div>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">Creer un Article</div>
      <div class="panel-body">
        <div class="form-group">
          {!! Form::open(['url' => '/admin/redaction/create/post','class' => 'form-horizontal']) !!}
          <div class="form-group">
            {!! Form::label('categorie_name','categorie',['class' => 'control-label', 'type' => 'text']) !!}
            {!! Form::select('categorie_name[]',$categorie,null, ['id' => 'categorie_label']) !!}
            {!! Form::label('publish','publié',['class' => 'control-label']) !!}
            {!! Form::checkbox('publish',null) !!}
            {!! Form::label('front','A la une',['class' => 'control-label']) !!}
            {!! Form::checkbox('front',null) !!}
          </div>
          <div class="form-group">
            {!! Form::label('title','title',['class' => 'control-label', 'type' => 'text']) !!}
            {!! Form::text('title',null,['class' => 'control-label']) !!}

            {!! Form::submit('ajouter',['class' => 'btn btn-success']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('article','article : ',['class' => 'control-label', 'type' => 'text']) !!}
            {!! Form::textarea('article',null,['class' => 'control-label']) !!}
          </div>
          <!-- <div class="form-group">
            <div class="col-md-6 col-md-offset-4">

            </div>
          </div> -->
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
