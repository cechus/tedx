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
    <link rel="stylesheet" href="{{ asset('/') }}libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/wata.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Miriam+Libre" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    @yield('extra_css')
    <style type="text/css">
        h2{
            font-family: 'Miriam Libre', sans-serif;
        }
        h3{
            font-family: 'Miriam Libre', sans-serif;
        }
        h4{
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
        <!-- navbar -->
        @include('partials.navbar')

        <!--content-->
        @yield('content')

        <!-- Footer section -->
        @include('partials.footer')
    </div>
    <!-- Scripts -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}libs/materialize/js/materialize.min.js"></script>
    <script type="text/javascript">
        $( document ).ready(function(){
            $('.button-collapse').sideNav();
        });
    </script>
    <script src="{{ asset('/') }}js/config.js"></script>
    <script src="{{ asset('/') }}js/build.js"></script>
    <script src="{{ asset('/') }}js/index.js"></script>
    @yield('extra_js')
</body>
</html>
