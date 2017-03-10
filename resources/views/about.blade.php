@extends('layouts.app')
<!-- About section -->
<style>
    #logos{
        margin-top: 15%;
        width: 60%;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    #logos1{
        margin-top: 15%;
        width: 60%;
        height: 200%;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    #charlas{
        margin-top:5%;
        width: 100%;
        border-radius: 5px;
    }

    .video-container1 {
        position:relative;
        padding-bottom:56.25%;
        padding-top:30px;
        height:0;
        overflow:hidden;
    }

    .video-container1 iframe, .video-container1 object, .video-container1 embed {
        position:absolute;
        top:0;
        left:15%;
        width:70%;
        height:60%;
    }

    h3 {
        margin-bottom: 50px;
      text-align: center;
      text-transform: uppercase;
      font-size: 46px;
      font-weight: 200;
      line-height: 110%;
      letter-spacing: 5px;
    }

    @media only screen and (max-width: 600px) {
        h3{
            font-size: 46px;
            letter-spacing: 3px;
        }
    }
    h3:after {
        content: '';
        position: absolute;
        left: 50%;
        display: block;
        width: 100px;
        height: 5px;
        margin-left: -50px;
        margin-top: 35px;
        background-color: #69f0ae;
    }

    h2.centre-line{
        width: 90%;
        border-bottom:0.1rem solid #ccc;
        line-height:0.1em;
        margin:2.5rem 5%;
        text-transform: none;
    }

    h2.centre-line span{
        background-color:#fff;
        padding:0 1rem;
    }

    iframe{
        display: block;
        margin: auto;
    }
</style>
@section('extra_css')

@section('content')
<div class="section scrollspy" id="about">
    <div class="container">
        <div class="row">
            <h2>Acerca de</h2>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12 m4">
                <div class="description-ball"></div>
                <div class="description center-align">
                    <img  id="charlas" src="{{asset('images')}}/about/charlas.jpg" >
                </div>
            </div>
            <div class="col s12 m2">
                <div class="description-ball"></div>
                <div class="description center-align">
                    <img  class="responsive-img" id="logos" src="{{asset('images')}}/about/TED.svg">
                </div>
            </div>
            <div class="col s12 m6">
                <div class="description-ball"></div>
                <div class="description center-align">
                <div class="row h4-row">
                    <h4>¿Qué es TED y TEDx?<br><small></small></h4>
                    <p>TED es una comunidad global sin fines de lucro, que mediante charlas se dedica a la difusión de ideas innovadoras de forma concisa.</p>
                    <p>Los eventos TEDx, realizados en diferentes partes del mundo, se organizan sin fines políticos, religiosos, ni ganancias personales.Estos eventos son creados pensando en que una idea puede cambiar el mundo.</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="divider"></div>
    </div>
    <div class="container">
        <div class="row">
        <div class="col s12 m4">
            <div class="description-ball"></div>
            <div class="description center-align">
                <img id ="charlas" src="{{asset('images')}}/about/charla2.png" >
            </div>
        </div>
        <div class="col s12 m2">
            <div class="description-ball"></div>
            <div class="description center-align">
                <img class="responsive-img" id="logos" src="{{asset('images')}}/about/TEDxUMSA4.svg">
            </div>
        </div>
        <div class="col s12 m6">
            <div class="description-ball"></div>
            <div class="description center-align">
                <div class="row h4-row">
                    <h4>¿Qué es TEDxUMSA?<br><small></small></h4>
                    <p>TEDxUMSA es un evento que busca difundir ideas valiosas que provoquen en la juventud paceña la inquietud de encontrar su propósito personal para contribuir con soluciones creativas e innovadora a las necesidades y problemáticas de nuestra ciudad.</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="container video">
        <iframe align="middle" width="853" height="480" src="//www.youtube.com/embed/vzhu8QTA9cc?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <h2 class="centre-line"><span>TEDxUMSA</span></h2>
        </div>
    </div>
    <div class="container">
    </div>
    <div class="container">
        <div class="row">
            <div class="col s12 m4">
                <div class="description-ball"></div>
                <div class="description center-align">
                    <img id ="charlas" src="{{asset('images')}}/about/charla2.png" >
                </div>
            </div>
            <div class="col s12 m8">
                <div class="description-ball"></div>
                <div class="description center-align">
                    <div class="row h4-row">
                        <h4>Misión/Visión<br></h4>
                        <p>Sembrar ideas que inspiren a jóvenes a encontrar su propósito.</p>
                        <p>Ser una organización que promueva el intercambio de ideas para cambiar la actitud de los jóvenes frente a las necesidades y problemáticas de Bolivia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col s12 m12">
                <div class="description-ball"></div>
                <div class="description center-align">
                    <div class="row h4-row">
                        <h4 style="font-weight:bold">Difundir ideas valiosas<br></h4>
                        <h4><span>Transformando ideas en acciones</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra_js')
    <script type="text/javascript">
        $('.button-collapse').sideNav({
            menuWidth: 300,
            edge: 'left',
            closeOnClick: true,
            draggable: true
        });
    </script>
    <script type="text/javascript">
        $(this).siblings('li').removeClass('active');
        $(".about").addClass('active');
    </script>
@endsection
