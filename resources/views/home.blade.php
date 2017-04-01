@extends('layouts.app')

@section('extra_css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
<style>
    .typed {
        display: inline-block;
        margin: 0;
        font-size: 35px;
        font-weight: bold;
    }
    .text-center {
        text-align: center;
    }
    @keyframes flash {
      0%, 100% {
        opacity: 1;
      }

      50% {
        opacity: 0;
      }
    }

    .typed-cursor {
        font-size: 60px;
        display: inline-block;
        margin: 0 10px;
        color: red;
        -webkit-animation-name: flash;
        animation-name: flash;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
    }
    .leaflet-top, .leaflet-bottom{
      z-index: 799;
    }
    #otriangles {
        height: 600px;
        background-image: url("images/home/bg_image.png");
        background-repeat: no-repeat;
        background-size: cover;
    }
    #otriangles .h1-wrapper {
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        color: white;
    }
    #otriangles .h1-wrapper h1 {
        text-align: center;
        font-weight: 200;
        font-size: 3rem;
        line-height: 3.92rem;
        text-shadow: 1px 1px #000;
    }
    @media only screen and (min-width: 601px) and (max-width: 992px) {
        #otriangles .h1-wrapper h1 {
            font-size: 4.5rem;
            line-height: 4.7rem;
        }
    }
    @media only screen and (min-width: 993px) {
        #otriangles .h1-wrapper h1 {
            font-size: 7.0rem;
            line-height: 7.4rem;
        }
    }
    #otriangles .h1-wrapper i {
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
    }
    #otriangles #explore {
        position: absolute;
        bottom: 15px;
        left: 50%;
        margin-left: -27.75px;
    }
    strong{
        font-weight: 600;
    }
    .tshadow{
        text-shadow: 2px 2px #000;
    }
    iframe{
        height: 100%;
        width: 100%;
    }
</style>
@endsection

@section('content')

<!-- Triangles section -->
<div id="otriangles" class="scrollspy video-background pattern">
    <div id="output video-foreground" style="height:100%">
        <!-- <iframe id="video" src="https://www.youtube.com/embed/8YALuQ3IEAQ?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&branding=0" frameborder="0" allowfullscreen></iframe> -->
        <div class="h1-wrapper valign-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <h1 style="font-family:Arial,Helvetica" class="tshadow"><strong>TEDx</strong><span class="brand">UMSA</span></h1>
                    </div>
                    <div class="col s12 text-center">
                        <h3 class="typed tshadow">13 de Mayo / 8:00 a 16:00 / Paraninfo Universitario</h3>
                        <span class="typed-cursor tshadow">|</span>
                    </div>
                </div>
            </div>
            <a href="#services" class="btn-floating btn-large waves-effect waves-dark" id="explore" style="background-color:#07c7b9; color=#fff">
                <i class="mdi-navigation-arrow-forward"></i>
            </a>
        </div>
    </div>
</div>
<!-- Services section -->
<div class="section scrollspy" id="services">
    <div class="container">
        <div class="row">
           <h2>Lugar del Evento</h2>
               <div class="col s12 m8 l8">
                   <div id="map" class="z-depth-1 wow fadeInUp" style="height: 400px"></div>
               </div>
                <div class="col s12 m4 l4">
                <br><br>
                <ul class="text-xs-center" style="text-align:center" id="staggered-test">
                    <li class="event-info wow fadeInUp" data-wow-delay="0.3s"><i class="fa fa-calendar fa-3x"></i>
                        <p>13 / Mayo / 2017</p>
                    </li>
                    <li class="event-info wow fadeInUp" data-wow-delay="0.2s"><i class="fa fa-map-marker fa-2x"></i>
                        <p>Paraninfo de la UMSA, La Paz &ndash; Bolivia</p>
                    </li>
                    <li class="event-info wow fadeInUp" data-wow-delay="0.4s"><i class="fa fa-envelope fa-2x"></i>
                        <p>tedxumsa@gmail.com</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection

@section('extra_js')
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script> -->
<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
<script src="{{ asset('/') }}js/home.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        // Add smooth scrolling to all links
        $("#explore").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 300, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
                });
            } // End if
            Materialize.showStaggeredList('#staggered-test');
            Materialize.fadeInImage('#map');
        });

        (function() {
            var otriangles = document.getElementById('otriangles'),
                nav = document.getElementById('nav'),
                windowHeight,
                navHeight,
                otrianglesHeight;
            function resizeTriangles() {
                windowHeight = window.innerHeight;
                navHeight = nav.clientHeight;
                otrianglesHeight = windowHeight - navHeight;
                otriangles.style.height = otrianglesHeight + 'px';
            }
            resizeTriangles();
            window.addEventListener('resize', resizeTriangles);
        })();

        (function() {
            var otriangles = document.getElementById('video'),
                nav = document.getElementById('nav'),
                windowWidth,
                navHeight,
                otrianglesWidht;
            function resizeVid() {
                windowWidht = window.innerWidth;
                navHeight = nav.clientHeight;
                otrianglesWidth = windowWidth;
                otriangles.style.width = otrianglesWidth + 'px';
            }
            resizeVid();
            window.addEventListener('resize', resizeVid);
        })();
        // $('.button-collapse').sideNav();
    });
</script>
@endsection
