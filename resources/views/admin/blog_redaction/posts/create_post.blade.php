@extends('layouts.admin.app')
@section('tools')
<div class="col-md-8 tools">
  <a href="{{url('#')}}"><button type="button" name="button" class="btn btn-danger">Annuler</button></a>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">Creer un Article</div>
      <div class="panel-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br>
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris<br>
          nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor<br>
          in reprehenderit in voluptate velit esse cillum dolore eu fugiat<br>
          nulla pariatur. Excepteur sint occaecat cupidatat non proident,<br>
          sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
