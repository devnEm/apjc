@extends('layouts.admin.app')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
        <div class="panel-heading">Créer Election</div>
        <div class="panel-body">
          {!! Form::open(['url' => '/admin/election/create/'.$promotion->id,'class' => 'form-horizontal']) !!}
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
            {!! Form::label('date','date',['class' => 'col-md-4 control-label', 'type' => 'text']) !!}
            {!! Form::date('date',\Carbon\Carbon::now()) !!}
          </div>
          <div class="form-group">
            {!! Form::label('sieges_totaux','sieges_totaux',['class' => 'col-md-4 control-label']) !!}
            {!! Form::number('sieges_totaux',0) !!}
          </div>
          <div class="form-group">
            {!! Form::label('sieges_obtenus','sieges_obtenus',['class' => 'col-md-4 control-label']) !!}
            {!! Form::number('sieges_obtenus',0) !!}
          </div>
          <div class="form-group">
            {!! Form::label('nb_votant','nb_votant',['class' => 'col-md-4 control-label']) !!}
            {!! Form::number('nb_votant',0) !!}
          </div>
          <div class="form-group">
            {!! Form::label('nb_electeur','nb_electeur',['class' => 'col-md-4 control-label']) !!}
            {!! Form::number('nb_electeur',0) !!}
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
