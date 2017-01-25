<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>APJC-Admin</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}">

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/i18n/jquery-ui-i18n.min.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">


</head>

<body id="app-layout">
<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">

        <!-- Collapsed Hamburger -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- Branding Image -->
      <div class="navbar-header">
        <a class="navbar-left" href="{{ url('/') }}">
            <img src="{{ URL::asset('img/apjc-logo-2-64px.png') }}" alt="ecole-header" />
        </a>
      </div>

    </div>

        <!-- Left Side Of Navbar -->
      @if (Auth::user()->admin || !Auth::user()->adherent->bureau->redacteur)
        <ul class="my-nav-bar nav navbar-nav ">
          <li><a href="{{ url('/admin/redaction') }}">Acceder aux publications</a></li>
          <li><a href="{{ url('/admin') }}">Acceder à l'administration</a></li>
        </ul>
      @endif
    <div id="app-navbar-collapse" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <ul class="dropdown-menu" role="menu">
            <li><a href="/"><i class="fa fa-btn"></i> Voir le site</a></li>
            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Se deconnecter</a></li>
          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div><!--/.container-fluid -->
</nav>

<!-- Main component for a primary marketing message or call to action -->
<div class="container">
  <div class="row">
    @yield('tools')
  </div>

  <div class="row">
    <div class="col-md-8">
      @yield('content')
    </div>
    <div class="col-md-4">
      @yield('info')
    </div>
  </div>


</div>




    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
