@extends('layouts.core.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">

              <div class="panel panel-default panel-body">
                <div>
                  <div class="panel-heading">
                    <h1>Les actualités</h1>
                  </div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          {!! Form::open(['url' => '']) !!}
                          {!! Form::label('date') !!}
                          {!! Form::date('name', \Carbon\Carbon::now()) !!}
                          {!! Form::label('ecole') !!}
                          {!! Form::select('ecole',['ecole1','ecole2']) !!}
                          {!! Form::submit('activer les filtres') !!}
                          {!! Form::close() !!}
                        </div>
                      </div>                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="panel panel-default panel-body">
                          <article class="">
                            <h3>Titre</h3><date>10/02/2017</date>
                            <div class="">auteur : </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem debitis deleniti dicta enim eos fuga, inventore ipsum magnam, minus modi pariatur provident quam quo reprehenderit repudiandae sequi sint suscipit vero.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi cumque cupiditate dolore eligendi, eos explicabo laboriosam libero magnam maxime nemo odit optio quibusdam quisquam quod sapiente similique veritatis vitae.</p>
                            <div>
                              <a href="#"><button type="button" name="button">lire la suite</button></a>
                            </div>
                          </article>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="panel panel-default panel-body">
                          <article class="">
                            <h3>Titre</h3><date>10/02/2017</date>
                            <div class="">auteur : </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem debitis deleniti dicta enim eos fuga, inventore ipsum magnam, minus modi pariatur provident quam quo reprehenderit repudiandae sequi sint suscipit vero.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi cumque cupiditate dolore eligendi, eos explicabo laboriosam libero magnam maxime nemo odit optio quibusdam quisquam quod sapiente similique veritatis vitae.</p>
                            <div>
                              <a href="#"><button type="button" name="button">lire la suite</button></a>
                            </div>
                          </article>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="panel panel-default panel-body">
                          <article class="">
                            <h3>Titre</h3><date>10/02/2017</date>
                            <div class="">auteur : </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem debitis deleniti dicta enim eos fuga, inventore ipsum magnam, minus modi pariatur provident quam quo reprehenderit repudiandae sequi sint suscipit vero.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi cumque cupiditate dolore eligendi, eos explicabo laboriosam libero magnam maxime nemo odit optio quibusdam quisquam quod sapiente similique veritatis vitae.</p>
                            <div>
                              <a href="#"><button type="button" name="button">lire la suite</button></a>
                            </div>
                          </article>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="panel panel-default panel-body">
                          <article class="">
                            <h3>Titre</h3><date>10/02/2017</date>
                            <div class="">auteur : </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem debitis deleniti dicta enim eos fuga, inventore ipsum magnam, minus modi pariatur provident quam quo reprehenderit repudiandae sequi sint suscipit vero.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi cumque cupiditate dolore eligendi, eos explicabo laboriosam libero magnam maxime nemo odit optio quibusdam quisquam quod sapiente similique veritatis vitae.</p>
                            <div>
                              <a href="#"><button type="button" name="button">lire la suite</button></a>
                            </div>
                          </article>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="panel panel-default">
                <div class="panel-heading"><h1>Actu munici pale</h1></div>
                <div class="panel-body">
                  <div class="actu-muni">
                    <article class="">
                      <h3>Titre</h3><date>10/02/2017</date>
                      <div class="">auteur : </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem debitis deleniti dicta enim eos fuga,</p>
                      <div>
                        <a href="#"><button type="button" name="button">lire la suite</button></a>
                      </div>
                    </article>
                    <hr>
                    <article class="">
                      <h3>Titre</h3><date>10/02/2017</date>
                      <div class="">auteur : </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem debitis deleniti dicta enim eos fuga,</p>
                      <div>
                        <a href="#"><button type="button" name="button">lire la suite</button></a>
                      </div>
                    </article>
                    <hr>
                    <article class="">
                      <h3>Titre</h3><date>10/02/2017</date>
                      <div class="">auteur : </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem debitis deleniti dicta enim eos fuga,</p>
                      <div>
                        <a href="#"><button type="button" name="button">lire la suite</button></a>
                      </div>
                    </article>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection
