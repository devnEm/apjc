@extends('layouts.admin.app')
@section('tools')
<div class="col-md-8 tools">
  <a href="{{url('/admin/redaction')}}"><button type="button" name="button" class="btn btn-danger">Annuler</button></a>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">Modifier une catégorie</div>
      <div class="panel-body">
          {!! Form::model($category,['url' => '/admin/redaction/create/category','class' => 'form-horizontal']) !!}
          <div class="form-group">
            {{ csrf_field() }}
            {!! Form::label('label','label',['class' => 'col-md-4 control-label', 'type' => 'text']) !!}
            {!! Form::text('label',$category->text,['class'=>'col-md-4']) !!}
            @if ($errors->has('label'))
                <div class="col-md-4">
                    <strong>Un nom de catégorie est requis</strong>
                </div>
            @endif
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
