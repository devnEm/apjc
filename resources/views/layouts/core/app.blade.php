<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>APJC</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
      <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">



</head>
<body id="app-layout">
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-left" href="{{ url('/') }}">
                <img src="{{ URL::asset('img/apjc-logo-2-64px.png') }}" alt="ecole-header" />
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->

                <ul class="my-nav-bar nav navbar-nav ">
                    <li><a href="{{ url('/ecole') }}">Les Ecoles</a></li>
                    <li><a href="{{ url('/actualite') }}">Actualités</a></li>
                    <li><a href="{{ url('/actions') }}">Nos Actions</a></li>
                    <li><a href="{{ url('/info') }}">Qui sommes nous ?</a></li>
                    @if (!Auth::guest())
                        <li><a href="{{ url('/home') }}">Espace </a></li>
                        @if (Auth::user()->admin)
                            <li><a href="{{ url('/admin') }}">Admin</a></li>
                        @endif
                    @endif


                </ul>

                        <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Connexion
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/login') }}">Se connecter</a></li>
                                <li><a href="{{ url('/register') }}">S'inscrire</a></li>
                            </ul>
                        </li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/admin') }}"><i class="fa fa-btn fa-user"></i>Admin</a></li>
                                <li><a href="{{ url('/user') }}"><i class="fa fa-btn fa-user"></i>Mon compte</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
        </div>
    </div>
</nav>



    @yield('content')
            <footer>
              <div class="container">
                <div class="row">
                  <h4 class="pull-right">
                    By devnem
                  </h4>
                </div>
              </div>
            </footer>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
