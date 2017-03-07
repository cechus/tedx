@extends('layouts.app')
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
</style>
@section('content')
        <!-- The preloader we see before the whole site is loaded -->
        <div id="preloader" class="valign-wrapper">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue-only actually-black">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- A status spinner to indicate that some process is going on -->
        <div id="status">
            <div class="preloader-wrapper small active">
                <div class="spinner-layer spinner-blue-only actually-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
<!-- Triangles section -->
        <div id="triangles" class="scrollspy">
            <div id="output">
                <div class="h1-wrapper valign-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col s12">
                                <h1><strong>TEDx</strong>UMSA</h1>
                            </div>
                            <div class="col s12 text-center">
                                  <h3 class="typed">13 de Mayo / 8:00 a 16:00 / Paraninfo Universitario</h3>
                                  <span class="typed-cursor">|</span>
                            </div>
                        </div>
                    </div>
                    <!-- Action button -->
                    <a class="btn-floating btn-large waves-effect waves-dark green accent-2" id="explore">
                        <i class="mdi-navigation-arrow-forward indigo-text text-darken-4"></i>
                    </a>
                </div>
            </div>
        </div>
<!-- Services section -->
        <div class="section scrollspy" id="services">
            <div class="container">
                <div class="row">
                   <!--Section: event info-->
                   <h2 style="family-font:">Lugar del Evento</h2>
                               <!--First column-->
                               <div class="col s12 m8 l8">
                                   <!--Map container-->
                                   <div id="map" class="z-depth-1 wow fadeInUp" style="height: 400px"></div>
                               </div>
                               <!--/First column-->
                               <!--Second column-->
                               <div class="col s12 m4 l4">
                                   <br><br>
                                   <ul class="text-xs-center" style="text-align:center">
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
                               <!--/Second column-->
                       <!--Section: event info-->
                </div>

            </div>
        </div>
        </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
        <style type="text/css">
          .leaflet-top, .leaflet-bottom{
            z-index: 799;
          }
        </style>
        <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
        <script src="/js/home.js"></script>
@endsection
