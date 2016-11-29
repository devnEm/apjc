@extends('layouts.core.app')
@section('content')
<div class="container-fluid ecole-container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1 wrapper-article">
      <div class="panel panel-default">

        <ul class="nav nav-tabs">
          @foreach($promotions as $key => $promotion)
          @if($key == 0)
          <li class="active"><a data-toggle="tab" href="#{{$promotion->school->name}}">{{$promotion->school->name}}</a></li>
          @else
          <li><a data-toggle="tab" href="#{{$promotion->school->name}}">{{$promotion->school->name}}</a></li>
          @endif
          @endforeach
        </ul>


        <div class="tab-content">
          @foreach($promotions as $key => $promotion)
            @if($key == 0)
            <div id="{{$promotion->school->name}}" class="tab-pane fade in active">
            @else
            <div id="{{$promotion->school->name}}" class="tab-pane">
            @endif
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <h1>{{$promotion->school->name}}</h1>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h2>Informations gérérales</h2>
                    </div>
                    <div class="panel-body">
                      <ul>
                        <li>
                          <h4>Directrice</h4>
                          <span>{{$promotion->director_title}} {{$promotion->director_name}}</span>
                        </li>
                        <li>
                        <h4>Adresse</h4>
                        <address>
                          <p>
                            {{$promotion->school->street}}<br>91200 {{$promotion->school->city}}
                          </p>
                        </address>
                        </li>
                        <li>
                          <h4>nombre de classes</h4>
                          <label>{{count($promotion->classes)}}</label>
                        </li>
                        <li>
                          <h4>nombre d'élèves</h4>
                          <label>{{$promotion->effectif($promotion->id)}}</label>
                        </li>
                      </ul>
                      <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                          <div class="form-group " role="group">
                            <a href="#"><button type="button" class="btn btn-primary">Site municipal</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
                <div class="col-md-6">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h2>Conseils d'ecoles</h2>
                    </div>
                    <div class="panel-body">
                        <h4>Dates des conseils</h4>
                        @if($promotion->councils)
                          <ul>
                            @foreach($promotion->councils as $council)
                            <li>
                              <label>Date : </label>
                              <date>{{$council->date}}</date><br>
                              <a href="#"><button type="button" class="btn btn-primary">voir le rapport</button></a>
                            </li>
                            @endforeach
                          </ul>
                        @else
                          <h5>A définir</h5>
                        @endif
                      <h4>Liste des parents élus</h4>
                      <ul>
                        <li>Mme Untel</li>
                        <li>Mme Deuxtel</li>
                        <li>Mme Troistel</li>
                        <li>Mme Quatretel</li>
                        <li>Mme Cinqtel</li>
                        <li>Mme Sixtel</li>
                        <li>Mme Septtel</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                @foreach($promotion->school->posts as $post)
                <div class="col-md-4">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h2>{{$post->title}}</h2>
                    </div>
                    <div class="panel-body">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      </p>
                    </div>
                  </div>
                </div>
                @endforeach
                <!-- <div class="col-md-4">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h2>Actualité 2</h2>
                    </div>
                    <div class="panel-body">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h2>Actualité 3</h2>
                    </div>
                    <div class="panel-body">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      </p>
                    </div>
                  </div>
                </div> -->
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h2>Tableau recapitualif 1</h2>
                    </div>
                    <div class="panel-body">
                      <div class="table table responsive">
                        <table class="table">
                          <thead>
                            <td>Nom</td>
                            <td>effectif</td>
                          </thead>
                          <tbody>
                            @foreach($promotion->classes as $classe)
                            <tr>
                              <td>{{$classe->type}}</td>
                              <td>{{$classe->effectif}}</td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h2>Tableau recapitualif 2</h2>
                    </div>
                    <div class="panel-body">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h2>Tableau recapitualif 3</h2>
                    </div>
                    <div class="panel-body">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
