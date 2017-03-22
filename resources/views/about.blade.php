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

    .parallax-container {
        height: 380px !important;
    }

    .embed-container {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
        max-width: 100%;
        text-align: center;
    }
    .embed-container iframe, .embed-container object, .embed-container embed {
        display: inline-block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .aligned{
        text-align: center;
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

    <div class="parallax-container">
        <div class="parallax"><img src="images/about/4.jpg"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12 m12 l8 offset-l2">
                <div class="description-ball"></div>
                <div class="description center-align">
                    <div class="row h4-row">
                        <h3>¿Qué es TED y TEDx?<small></small></h3>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l8 offset-l2">
                <p class="aligned">TED es una comunidad global sin fines de lucro, que mediante charlas se dedica a la difusión de ideas innovadoras de forma concisa.</p>
                <p class="aligned">Los eventos TEDx, realizados en diferentes partes del mundo, se organizan sin fines políticos, religiosos, ni ganancias personales.Estos eventos son creados pensando en que una idea puede cambiar el mundo.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="divider"></div>
    </div>

    <div class="parallax-container">
        <div class="parallax"><img src="images/about/5.png"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12 m12 l8 offset-l2">
                <div class="description-ball"></div>
                <div class="description center-align">
                    <div class="row h4-row">
                        <h3>¿Qué es TEDxUMSA?<small></small></h3>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l8 offset-l2">
                <p class="aligned">TEDxUMSA es un evento que busca difundir ideas valiosas que provoquen en la juventud paceña la inquietud de encontrar su propósito personal para contribuir con soluciones creativas e innovadora a las necesidades y problemáticas de nuestra ciudad.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="divider"></div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col s12 m6 l6 offset-m3 offset-l3">
                <div class='embed-container'>
                    <iframe src='https://www.youtube.com/embed/vzhu8QTA9cc' frameborder='0' allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
    </div>
    <div class="container">
        <div class="row">
            <div class="col s12 m8 offset-m2">
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
        $(this).siblings('li').removeClass('active');
        $(".about").addClass('active');

        $(document).ready(function(){
            $('.parallax').parallax();
        });
    </script>
@endsection
