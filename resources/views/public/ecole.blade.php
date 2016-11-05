@extends('layouts.core.app')
@section('content')
<div class="container-fluid ecole-container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1 wrapper-article">
      <div class="panel panel-default">

        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#ecole1">Ecole 1</a></li>
          <li><a data-toggle="tab" href="#ecole2">Ecole 2</a></li>
        </ul>

        <div class="tab-content">
          <div id="ecole1" class="tab-pane fade in active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <h1>Ecole n°1</h1>
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
                          <span>Mme Ladirectrice</span>
                        </li>
                        <li>
                        <h4>Adresse</h4>
                        <address>
                          <p>
                            1 rue du nom a rallonge qui dépasse<br>91200 Athis-mons
                          </p>
                        </address>
                        </li>
                        <li>
                          <h4>Equipe pédagogique</h4>
                          <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#profs">Professeurs</a></li>
                            <li><a data-toggle="tab" href="#accs">Accompagnants</a></li>
                          </ul>
                          <div class="tab-content">
                          <div id="profs" class="tab-pane fade in active">
                            <ul>
                              <li>prof1</li>
                              <li>prof2</li>
                              <li>prof3</li>
                              <li>prof4</li>
                              <li>prof5</li>
                              <li>prof6</li>
                            </ul>
                          </div>

                          <div id="accs" class="tab-pane fade">
                            <ul>
                              <li>acc1</li>
                              <li>acc2</li>
                              <li>acc3</li>
                              <li>acc4</li>
                              <li>acc5</li>
                              <li>acc6</li>
                            </ul>
                        </div>
                        </div>
                      </li>
                      </ul>
                    </div>
                </div>
              </div>
                <div class="col-md-6">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3>Conseils d'ecoles</h3>
                    </div>
                    <div class="panel-body">
                        <h4>Dates des conseils</h4>
                      <ul>
                        <li>
                          <label>Date : </label>
                          <date>10/02/2017</date><br>
                          <a href="#">voir le rapport</a>
                        </li>
                        <li>
                          <label>Date : </label>
                          <date>10/02/2017</date><br>
                          <a href="#">voir le rapport</a>
                        </li>
                        <li>
                          <label>Date : </label>
                          <date>10/02/2017</date><br>
                          <a href="#">voir le rapport</a>
                        </li>
                      </ul>
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
                <div class="col-md-4">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3>Actualité 1</h3>
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
                      <h3>Actualité 2</h3>
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
                      <h3>Actualité 3</h3>
                    </div>
                    <div class="panel-body">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3>Tableau recapitualif 1</h3>
                    </div>
                    <div class="panel-body">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <td>2016-2017</td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>classe 1</td>
                              <td>20</td>
                            </tr>
                            <tr>
                              <td>classe 2</td>
                              <td>20</td>
                            </tr>
                            <tr>
                              <td>classe 3</td>
                              <td>20</td>
                            </tr>
                            <tr>
                              <td>classe 4</td>
                              <td>20</td>
                            </tr>
                            <tr>
                              <td>classe 5</td>
                              <td>20</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3>Tableau recapitualif 2</h3>
                    </div>
                    <div class="panel-body">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3>Tableau recapitualif 3</h3>
                    </div>
                    <div class="panel-body">
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <!-- deuxieme article -->
            <div id="ecole2" class="tab-pane fade">
              <div class="container-fluid">
                <div class="row">
                  <h1>Ecole n°2</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
