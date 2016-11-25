<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>APJC-Admin</title>

    <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="app-layout">
<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">

        <!-- Collapsed Hamburger -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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
    <div id="app-navbar-collapse" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="\admin">Administration</a></li>
        @if(Auth::user()->admin)
        <li><a href="\admin\ecole">Ecole</a></li>
        @endif
        <li><a href="\admin\promotion">Promotion</a></li>
        <li><a href="\admin\election">Election</a></li>

        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ecoles <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-header">Ecole</li>
            <li><a href="\admin\ecole">Voir</a></li>
            <li><a href="\admin\ecole\create">Ajouter</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Promotion</li>
            <li><a href="\admin\promotion">Voir</a></li>
            <li><a href="\admin\promotion\create">Ajouter</a></li>
          </ul>
        </li> -->
        <li><a href="\admin\redaction">Redaction</a></li>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">


            <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li><a href="#"><i class="fa fa-btn fa-user"></i>Mon compte</a></li>
                      <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                  </ul>
              </li>

      </ul>
    </div><!--/.nav-collapse -->
  </div><!--/.container-fluid -->
</nav>

<!-- Main component for a primary marketing message or call to action -->
<div class="container">
  @yield('tools')
  <div class="row">
    <div class="col-md-8">
      @yield('content')
    </div>
    <div class="col-md-4">
      @yield('info')
    </div>
  </div>


</div>



    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
