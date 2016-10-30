@extends('layouts.core.app')
@section('content')
    <div class="container main-container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 wrapper-article">
                <div class="panel panel-default">
                    <article>
                      <div class="ecole-article">
                        <h1>Ecole n°1</h1>
                          <img  src="{{ URL::asset('img/ecole-1.jpeg') }}"  alt="ecole n°1 - photo"/>
                          <h3>Directrice</h3>Mme Ladirectrice
                          <h4>Adresse</h4> Rue jean Jaures</br>91200 Athis-mons
                          <h4>Téléphone</h4> 0668866969
                          <div class="panel panel-default">
                            <div class="tab-ecole">
                              <table class="table">
                                  <thead>
                                    <td></td>
                                    <td>CP 1</td>
                                    <td>CP 2</td>
                                    <td>CP 2</td>
                                    <td>CP 2</td>
                                    <td>CP 2</td>
                                    <td>CP 2</td>
                                    <td>CP 2</td>
                                    <td>CP 2</td>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Nbre d'élèves</td>
                                      <td>25</td>
                                      <td>25</td>
                                      <td>25</td>
                                      <td>25</td>
                                      <td>25</td>
                                      <td>25</td>
                                      <td>25</td>
                                      <td>25</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                              <div class="tab-ecole-recap">
                                <table class="table">
                                  <thead>
                                    <td></td>
                                    <td>Total</td>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>CP</td>
                                      <td>100</td>
                                    </tr>
                                    <tr>
                                      <td>CE1</td>
                                      <td>100</td>
                                    </tr>
                                    <tr>
                                      <td>CE2</td>
                                      <td>100</td>
                                    </tr>
                                    <tr>
                                      <td>CM1</td>
                                      <td>100</td>
                                    </tr>
                                    <tr>
                                      <td>CM2</td>
                                      <td>100</td>
                                    </tr>
                                    <tr>
                                      <td><strong>Total</strong></td>
                                      <td><strong>100</strong></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                              <div class="conseil-ecole">
                                <h5>Nombre de sièges : 12</h5>
                              </hr>
                                <h5>Conseil d'écoles</h5>
                                <p>
                                  Conseil n° 1<br>
                                  Date : 12 mai 2017<br>
                                  <a href="#" > Rapport du 17 mai 2017 </a><br>
                                </p>
                                <p>
                                  Conseil n° 2<br>
                                  Date : 12 mai 2017<br>
                                  <a href="#" > Rapport du 17 mai 2017 </a><br>
                                </p>
                                <p>
                                  Conseil n° 3<br>
                                  Date : 12 mai 2017<br>
                                  <a href="#" > Rapport du 17 mai 2017 </a><br>
                                </p>
                              </div>
                            </div>
                          </div>
                    </article>
                </div>

            </div>
        </div>
    </div>
@endsection
