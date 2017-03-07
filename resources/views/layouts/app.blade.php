<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TEDxUMSA</title>
    <meta name="description" content="TEDxUMSA es un evento que busca difundir ideas valiosas que provoquen en la juventud paceña la inquietud de encontrar su propósito personal para contribuir con soluciones creativas e innovadora a las necesidades y problemáticas de nuestra ciudad." />
    <!-- Para Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="TEDxUMSA" />
    <meta name="twitter:description" content="TEDxUMSA es un evento que busca difundir ideas valiosas que provoquen en la juventud paceña la inquietud de encontrar su propósito personal para contribuir con soluciones creativas e innovadora a las necesidades y problemáticas de nuestra ciudad." />
    <meta name="twitter:image:src" content="{{asset('/images/logo/TEDxUMSA.png')}}" />
    <!-- Para Facebook y otros -->
    <meta property="og:type" content="article" />
    <meta property="og:title" content="TEDxUMSA" />
    <meta property="og:description" content="TEDxUMSA es un evento que busca difundir ideas valiosas que provoquen en la juventud paceña la inquietud de encontrar su propósito personal para contribuir con soluciones creativas e innovadora a las necesidades y problemáticas de nuestra ciudad." />
    <meta property="og:image" content="{{asset('/images/logo/TEDxUMSA.png')}}" />
    <meta property="og:url" content="http://www.tedxumsa.com" />
    <!-- Para Google+ -->
    <meta itemprop="name" content="TEDxUMSA" />
    <meta itemprop="description" content="TEDxUMSA es un evento que busca difundir ideas valiosas que provoquen en la juventud paceña la inquietud de encontrar su propósito personal para contribuir con soluciones creativas e innovadora a las necesidades y problemáticas de nuestra ciudad." />
    <meta itemprop="image" content="{{asset('/images/logo/TEDxUMSA.png')}}" />
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

        footer.page-footer .footer-copyright{
            line-height: 0px;
            margin: 4px;
        }
        ul{
            display: block;
            -webkit-margin-after: .5em;
            -webkit-margin-before: .5em;
        }
        /*.ic{
            font-size:12px;
        }*/

        .nav-logo{
            margin: 10px;
            height: 65%;
        }

        .footer-logo{
            margin: 10px;
        }

        .social > .ic{
            font-size: 12px;
        }

        .row-footer{
            margin-bottom: 0px !important;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <!-- Navigation bar -->
        <div class="navbar-fixed" id="nav">
            <nav>
                <div class="nav-wrapper">
                    <!-- Site name -->
                    <a href="/">
                        <img class="nav-logo" src="/images/logo/TEDxUMSA-1.svg">
                    </a>
                    <!-- Mobile menu button -->
                    <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                    <!-- Static menu -->
                    <ul class="right hide-on-med-and-down table-of-contents">
                        <li><a href="{{url('about')}}">Acerca de</a></li>
                        <li><a href="{{url('aliados')}}">Auspiciadores</a></li>
                        <li><a href="{{url('expositores')}}">Expositores</a></li>
                        <li><a href="{{url('equipo')}}">Equipo</a></li>
                        <!-- <li><a href="{{url('posts')}}">Blog</a></li> -->
                        <li><a href="{{url('participar')}}">Participar</a></li>
                    </ul>
                    <!-- Mobile menu, make sure it is equal to the statis menu -->
                    <ul class="side-nav" id="mobile-menu">
                        <li><a href="{{url('about')}}">Acerca de</a></li>
                        <li><a href="{{url('aliados')}}">Auspiciadores</a></li>
                        <li><a href="{{url('expositores')}}">Expositores</a></li>
                        <li><a href="{{url('equipo')}}">Equipo</a></li>
                        <!-- <li><a href="{{url('posts')}}">Blog</a></li> -->
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
            <div class="container" style="height: auto">
                <div class="row row-footer" style="margin-bottom=0px">
                    <div class="col s8">
                        <a href="/">
                            <img class="footer-logo" src="/images/logo/TEDxUMSA-1.svg">
                        </a>
                    </div>
                    <div class="col s4">
                        <ul class="icons right social">
                            <li><a href="https://www.facebook.com/TEDxUMSA"><i class="fa ic fa-facebook"></i>&#160;facebook.com/TEDxUMSA</a></li>
                            <li><a href="https://www.twitter.com/tedxumsa"><i class="fa ic fa-twitter"></i>&#160;@tedxumsa</a></li>
                            <li><a href="mailto:tedxumsa@gmail.com"><i class="fa ic fa-envelope"></i>&#160;tedxumsa@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Scripts -->

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}libs/materialize/js/materialize.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script> -->
    {{--<script src="https://maps.googleapis.com/maps/api/js"></script>--}}
    <script src="{{ asset('/') }}js/config.js"></script>
    <script src="{{ asset('/') }}js/build.js"></script>
    @yield('scriptside')

    <script>
        $('.nav-wrapper ul li').click(function() {
            $(this).siblings('li').removeClass('active');
            $(this).addClass('active');
        });
    </script>
</body>
</html>
