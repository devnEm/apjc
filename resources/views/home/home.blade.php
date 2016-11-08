@extends('layouts.core.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Mes Informations</div>

                <div class="panel-body">
                    <table>
                        <th>Nom</th>
                        <tr>
                            <td>{{Auth::user()->name}}</td>
                        </tr>
                        <th>mail</th>
                        <tr>
                            <td>{{Auth::user()->email}}</td>
                        </tr>
                        @if(Auth::user()->admin)
                        <th>admin</th>
                        <tr>
                          <td>
                            <input type="checkbox" checked="checked" onclick="return false"/>
                          </td>
                        </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
