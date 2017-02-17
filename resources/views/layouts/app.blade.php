<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TEDxUMSA</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/') }}libs/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/wata.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Miriam+Libre" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <style type="text/css">
        h2{
            font-family: 'Miriam Libre', sans-serif;
        }
        p{
            font-family: 'Open Sans', sans-serif;
        }
    </style>
    <!--Scripts-->
    <script>

    </script>
</head>
<body>
    <div id="wrapper">
        

        <!-- Navigation bar -->
        <div class="navbar-fixed" id="nav">
            <nav>
                <div class="nav-wrapper">
                    <!-- Site name -->
                    <a href="/">
                        <img src="/images/logo/TEDxUMSA-1.svg" style="margin:4px">
                    </a>
                    
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
                    <a href="/">
                        <img src="/images/logo/TEDxUMSA-1.png" >
                    </a>
                    <!-- Social icons -->
                    <span class="social right">
                    <ul>
                        <li><a href="#!"><i class="fa fa-facebook"></i>hola dnasn</a></li>
                        <li><a href="#!"><i class="fa fa-twitter"></i>hola dnasn</a></li>
                        <li><a href="#!"><i class="fa fa-mail"></i>hola dnasn</a></li>
                        <li><a href="#!"><i class="fa fa-facebook"></i>hola dnasn</a></li>
                        <li><a href="#!"><i class="fa fa-facebook"></i>hola dnasn</a></li>
                    </ul>
                    <a href="#!"><i class="fa fa-vk"></i></a>
                    <a href="#!"><i class="fa fa-google-plus"></i></a>
                    <a href="#!"><i class="fa fa-github"></i></a>
                    <a href="#!"><i class="fa fa-deviantart"></i></a>
                    </span>
                </div>
            </div>
        </footer>    
    </div>
    
    <!-- Scripts -->
    {{--<script src="https://maps.googleapis.com/maps/api/js"></script>--}}
    <script src="{{ asset('/') }}js/config.js"></script>
    <script src="{{ asset('/') }}js/build.js"></script>
</body>
</html>
