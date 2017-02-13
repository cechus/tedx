<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="libs/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/wata.css">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="wrapper">
        

        <!-- Navigation bar -->
        <div class="navbar-fixed" id="nav">
            <nav>
                <div class="nav-wrapper">

                    <!-- Site name -->
                    <a href="/" class="brand-logo">TEDxUMSA</a>

                    <!-- Mobile menu button -->
                    <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="mdi-navigation-menu"></i></a>

                    <!-- Static menu -->
                    <ul class="right hide-on-med-and-down table-of-contents">
                        <li><a href="{{url('about')}}">Acerca de</a></li>
                        <li><a href="{{url('aliados')}}">Aliados</a></li>
                        <li><a href="{{url('expositores')}}">Expositores</a></li>
                        <li><a href="{{url('equipo')}}">Equipo</a></li>
                        <li><a href="{{url('blog')}}">Blog</a></li>
                        <li><a href="{{url('participar')}}">Participar</a></li>
                    </ul>

                    <!-- Mobile menu, make sure it is equal to the statis menu -->
                    <ul class="side-nav" id="mobile-menu">
                        <li><a href="{{url('about')}}">Acerca de</a></li>
                        <li><a href="{{url('aliados')}}">Aliados</a></li>
                        <li><a href="{{url('expositores')}}">Expositores</a></li>
                        <li><a href="{{url('equipo')}}">Equipo</a></li>
                        <li><a href="{{url('blog')}}">Blog</a></li>
                        <li><a href="{{url('participar')}}">Participar</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--/navabar-->


        <!--content-->
        @yield('content')
        <!--/content-->

        <!-- Footer section -->
        <footer class="page-footer">
            <div class="footer-copyright">
                <div class="container">
                            © 2017 TEDX | <a href="ajax/pages/privacy-policy.html" class="ajax-link">Privacy policy</a>
                            <!-- Social icons -->
                    <span class="social right">
                    <a href="#!"><i class="fa fa-facebook"></i></a>
                    <a href="#!"><i class="fa fa-vk"></i></a>
                    <a href="#!"><i class="fa fa-google-plus"></i></a>
                    <a href="#!"><i class="fa fa-github"></i></a>
                    <a href="#!"><i class="fa fa-deviantart"></i></a>
                    </span>
                </div>
            </div>
        </footer>    
    </div>
    <!--/wrapper-->
    <!--
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        
    </div>-->

    <!-- Scripts -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/config.js"></script>
    <script src="js/build.js"></script>
</body>
</html>
