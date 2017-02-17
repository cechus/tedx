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
    <link rel="stylesheet" href="{{ asset('/') }}libs/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/wata.css">
    <!-- Scripts -->
    <script>

    </script>
</head>
<body>
<div >


    <!-- Navigation bar -->
    <div class="navbar-fixed" id="nav">
        <nav>
            <div class="nav-wrapper">

                <!-- Site name -->
                <a href="/" class="brand-logo">TEDxUMSA</a>

                <!-- Mobile menu button -->
                <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="mdi-navigation-menu"></i></a>


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


<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}libs/materialize/js/materialize.min.js"></script>
<script>
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
</body>
</html>
