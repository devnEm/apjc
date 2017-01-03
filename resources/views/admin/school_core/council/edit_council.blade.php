@extends('layouts.admin.app')
@section('tools')
<div class="col-md-8 tools">
  <a href="{{url('/admin/promotion/show/'.$council->promotion->id)}}"><button type="button" name="button" class="btn btn-info">Retour</button></a>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">Modifier un conseil d'école</div>
      <div class="panel-body">
        {!! Form::model($council, ['url' => '/admin/promotion/council/update/'.$council->id,'class' => 'form-horizontal']) !!}
        <div class="form-group">
          {{ csrf_field() }}
          {!! Form::label('Ecole','ecole : ',['class' => 'col-md-4 control-label', 'type' => 'text']) !!}
          {!! Form::label('ecole',$council->promotion->school->name,['class' => 'control-label']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('Ecole','promotion : ',['class' => 'col-md-4 control-label', 'type' => 'text']) !!}
          {!! Form::label('ecole',$council->promotion->year,['class' => 'control-label']) !!}
        </div>
        <script>
          $(function() {
            $( "#datepicker" ).datepicker($.datepicker.regional[ "fr" ]);
          });
        </script>
        <div class="form-group">
          {!! Form::label('date','date',['class' => 'col-md-4 control-label', 'type' => 'text']) !!}
          {!! Form::text('date',$council->date,['id' => "datepicker", 'class' => 'col-md-4']) !!}
          @if ($errors->has('date'))
              <div class="col-md-3">
                  <strong>{{ $errors->first('date') }}</strong>
              </div>
          @endif
        </div>
        {{-- <div class="form-group">
          {!! Form::label('rapport','rapport',['class' => 'col-md-4 control-label','type'=>'file']) !!}
          {!! Form::file('rapport',['class' => 'col-md-4']) !!}
        </div> --}}
        <div class="form-group">
          <div class="col-md-6 col-md-offset-4">
            {!! Form::submit('modifier',['class' => 'btn btn-warning']) !!}
          </div>
        </div>
        {!! Form::close() !!}
        <hr>
          <div class="col-md-6 col-md-offset-2">
            <form class="form-horizontal" action="/rapport/{{ $council->id }}" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                {{ csrf_field() }}
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <input type="file" name="rapport"></input>
              </div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <button type="submit">Enregister le rapport</button>
                </div>
              </div>
            </form>
          </div>
      </div>


    </div>
    </div>
  </div>
</div>

@endsection
