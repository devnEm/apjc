@extends('layouts.admin.app')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="titre">Ajouter un conseil d'école</div>
        <a href="{{url('/admin/promotion/show/'.$promotion->id)}}"><button type="button" name="button" class="btn btn-danger">Annuler</button></a>
      </div>
      <div class="panel-boby">
        <div class="form-group">
          {!! Form::open(['url' => '/admin/promotion/create/council/'.$promotion->id,'class' => 'form-group']) !!}
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
            {!! Form::label('date','date',['class' => 'form-group', 'type' => 'text']) !!}
            {!! Form::date('date',\Carbon\Carbon::now(),['class' => 'form-group']) !!}
          </div>
            <div class="form-group">
              {!! Form::label('url','url',['class' => 'form-group']) !!}
              {!! Form::text('url',null,['class' => 'form-group']) !!}
            </div>            
              {!! Form::submit('ajouter',['class' => 'btn btn-success']) !!}
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
