@extends('layouts.admin.app')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
        <div class="panel-heading">Créer Election</div>
        <div class="panel-body">
          <div class="form-group">
            {!! Form::open(['url' => '/admin/election/create/'.$promotion->id,'class' => 'form-group']) !!}
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
              {!! Form::label('sieges_totaux','sieges_totaux',['class' => 'form-group']) !!}
              {!! Form::number('sieges_totaux',0,['class' => 'form-group']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('sieges_obtenus','sieges_obtenus',['class' => 'form-group']) !!}
              {!! Form::number('sieges_obtenus',0,['class' => 'form-group']) !!}
            </div>
            <!-- <div class="form-group">
              {!! Form::label('participation','participation',['class' => 'form-group']) !!}
              {!! Form::number('participation',0,['class' => 'form-group']) !!}
            </div> -->
            <div class="form-group">
              {!! Form::label('nb_votant','nb_votant',['class' => 'form-group']) !!}
              {!! Form::number('nb_votant',0,['class' => 'form-group']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('nb_electeur','nb_electeur',['class' => 'form-group']) !!}
              {!! Form::number('nb_electeur',0,['class' => 'form-group']) !!}
            </div>
                {!! Form::submit('ajouter',['class' => 'btn btn-success']) !!}
          </div>
            {!! Form::close() !!}
          </a>
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
