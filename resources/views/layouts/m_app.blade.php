<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wsdl helper</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0-rc2/angular-material.min.css">
    <link rel="stylesheet" type="text/css" href="/bower_components/chosen/chosen.css" />
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ url('/css/main.css') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>


    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout" ng-app="main-App">

    <div class="mdl-layout mdl-js-layout">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">WSDL Helper</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation -->
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link md-primary" href="{{ url('/home') }}">Home</a>
                    <a class="mdl-navigation__link md-primary" href="{{ url('/projects') }}">Projects</a>
                    <a class="mdl-navigation__link md-primary" href="{{ url('/#/requests') }}">Requests</a>


                    @if (Auth::guest())
                        <a class="mdl-navigation__link md-primary" href="{{ url('/login') }}">Login</a>
                        <a class="mdl-navigation__link md-primary" href="{{ url('/register') }}">Register</a>
                    @else
                        <button id="demo-menu-lower-right"
                                class="mdl-button mdl-js-button mdl-button--icon">
                            <i class="material-icons">more_vert</i>
                        </button>

                            {{--<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                                {{-- <span class="caret"></span>--}}
                            {{--</a>--}}

                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                            for="demo-menu-lower-right">
                            <li><a href="{{ url('/logout') }}"><i class="mdl-menu__item">{{ Auth::user()->name }} - Logout</i></a></li>
                        </ul>

                    @endif
                </nav>
            </div>
        </header>
        <main class="mdl-layout__content">
            <div class="page-content">
                <div class="container">
                    <ng-view></ng-view>

                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--1-col">1</div>
                        <div class="mdl-cell mdl-cell--1-col">1</div>
                        <div class="mdl-cell mdl-cell--1-col">1</div>
                        <div class="mdl-cell mdl-cell--1-col">1</div>
                        <div class="mdl-cell mdl-cell--1-col">1</div>
                        <div class="mdl-cell mdl-cell--1-col">1</div>
                        <div class="mdl-cell mdl-cell--1-col">1</div>
                        <div class="mdl-cell mdl-cell--1-col">1</div>
                        <div class="mdl-cell mdl-cell--1-col">1</div>
                        <div class="mdl-cell mdl-cell--1-col">1</div>
                        <div class="mdl-cell mdl-cell--1-col">1</div>
                        <div class="mdl-cell mdl-cell--1-col">1</div>
                    </div>
                </div>
                @yield('content')
            </div>
        </main>
    </div>





    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    <!-- Angular JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular-route.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>
    <!-- Angular Material Library -->
    <script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0-rc2/angular-material.min.js"></script>

    <!-- MY App -->
    <script src="{{ asset('/app/packages/dirPagination.js') }}"></script>
    <script src="{{ asset('/app/routes.js') }}"></script>
    <script src="{{ asset('/app/services/myServices.js') }}"></script>
    <script src="{{ asset('/app/services/RequestServices.js') }}"></script>
    <script src="{{ asset('/app/helper/myHelper.js') }}"></script>

    <!-- App Controller -->
    <script src="{{ asset('/app/controllers/ItemController.js') }}"></script>
    <script src="{{ asset('/app/controllers/RequestsController.js') }}"></script>
    <script src="{{ asset('/app/controllers/ResponseController.js') }}"></script>

    <script src="/bower_components/chosen/chosen.jquery.js"></script>
    <script src="/bower_components/angular-chosen-localytics/dist/angular-chosen.min.js"></script>


    <script src="{{ url('/js/app.js') }}"></script>
</body>
</html>
