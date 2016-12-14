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
      <div class="panel-heading">Ajouter un conseil d'école</div>
      <div class="panel-body">
        <div class="form-group">
          {!! Form::open(['url' => '/admin/promotion/create/council/'.$promotion->id,'class' => 'form-horizontal']) !!}
          <div class="form-group">
            {{ csrf_field() }}
            {!! Form::label('promotion_id','promotion_id',['class' => 'hidden', 'type' => 'text']) !!}
            {!! Form::text('promotion_id',$promotion->id,['class' => 'hidden']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('Ecole','ecole : ',['class' => 'col-md-4 control-label', 'type' => 'text']) !!}
            {!! Form::label('ecole',$promotion->school->name,['class' => 'control-label']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('Ecole','promotion : ',['class' => 'col-md-4 control-label', 'type' => 'text']) !!}
            {!! Form::label('ecole',$promotion->year,['class' => 'control-label']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('date','date',['class' => 'col-md-4 control-label', 'type' => 'text']) !!}
            {!! Form::date('date',\Carbon\Carbon::now()) !!}
          </div>
          <div class="form-group">
            {!! Form::label('url','url',['class' => 'col-md-4 control-label']) !!}
            {!! Form::text('url',null) !!}
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
