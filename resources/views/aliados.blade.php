@extends('layouts.app')

@section('extra_css')
<style>
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
	   h3 {
		   font-size: 46px;
		   letter-spacing: 3px; }
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
		   font-size: 30px;
	   }
	   h2.centre-line span{
		   background-color:#fff;
		   padding:0 1rem;
		   font-size: 30px;
	   }
	   .border{
		   display: flex;
		   align-items: center;
		   height: 400px;
		   border:1px solid #3c3c3c;
		   border-radius: 5px;
	   }
	   .borderin{
		   display: flex;
		   align-items: center;
		   height: 300px;
		   border:1px solid #3c3c3c;
		   border-radius: 5px;
	   }
	   .bordercr{
		   display: flex;
		   align-items: center;
		   height: 200px;
		   border:1px solid #3c3c3c;
		   border-radius: 5px;
	   }
	   .borderam{
		   display: flex;
		   align-items: center;
		   height: 100px;
		   border:1px solid #3c3c3c;
		   border-radius: 5px;
	   }
	   .responsive-img{
		   margin-bottom:15px;
	   }
	   .center{
		   display: flex;
		   justify-content: center;
	   }
	   .diamond {
		   width: 100%;
		   text-align: center;
		   align-self: center;
		   padding: 2rem;
	   }
   }
   .parallax-container {
		height: 380px !important;
   	}
	.aligned{
		text-align: justify;
	}
</style>
@endsection

@section('content')

<div class="section scrollspy" id="works">
	<div class="container title-page">
		<div class="row">
			<h2>Auspiciadores</h2>
		</div>
	</div>

	<div class="parallax-container">
        <div class="parallax"><img src="images/aliados/umsa1.jpg"></div>
    </div>

	<div class="container">
		<div class="row">
			<div class="col s12 m12 l8 offset-l2">
                <div class="description-ball"></div>
                <div class="description center-align">
                    <div class="row h4-row">
						<h4 class="centre-line"><span>¿Por qué ser un auspiciador?</span></h4>
                    </div>
                </div>
            </div>

			<div class="col s12 m12 l8 offset-l2">
				<p class="aligned">
					La misión de TEDxUMSA es difundir las ideas valiosas de nuestro entorno a través de la organización de una
					conferencia anual que reuna expositores inspiradores y a estudiantes motivados por cambiar el mundo a través
					de charlas significativas y apasionantes.
				</p>
				<p class="aligned">
					Como auspiciador de TEDxUMSA, podrá tener la oportunidad de entablar un diálogo auténtico con un público valioso
					y ambicioso: gente apasionada y de mente abierta. Su participación en nuestro evento no es solo para presentar
					nuevas ideas, sino también para aprender de TEDx y su comunidad.</p>
				<p class="aligned">
					Brinde una oportunidad para una comunidad universitaria
					de pensadores, soñadores y visionarios de involucrarse en un tema que sea significativo para usted.
				</p>
			</div>

			<div class="row">
				<div class="col s12 m2 l2 offset-m2 offset-l2">
					<h4 class="centre-line" style="text-align:center"><strong>+12,900</strong></h4>
					<p style="text-align:center">eventos TEDx han sido realizado alrededor del mundo</p>
				</div>
				<div class="col s12 m2 l2 offset-m1 offset-l1">
					<h4 class="centre-line" style="text-align:center"><strong>+3190</strong></h4>
					<p style="text-align:center">ciudades alrededor del mundo fueron centros de uno o más eventos TEDx.</p>
				</div>
				<div class="col s12 m2 l2 offset-m1 offset-l1">
					<h4 class="centre-line" style="text-align:center"><strong>+173</strong></h4>
					<p style="text-align:center">países han organizado uno o más eventos TEDx</p>
				</div>
			</div>

			<div class="row">
				<div class="col s12 m4 l4 offset-m4 offset-l4">
					<div class="card-panel" style="background-color:#fb3846">
						<span class="white-text">
							El 2016, los videos de todos los eventos TEDx realizados alrededor del mundo alcanzaron <strong style="font-size:18px">1 billón de visualizaciones</strong>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col s12 m12 l8 offset-l2">
                <div class="description-ball"></div>
                <div class="description center-align">
                    <div class="row h4-row">
						<h4 class="centre-line"><span>¿Qué ofrecemos?</span></h4>
					</div>
				</div>
			</div>
			<div class="col s12 m12 l8 offset-l2">
				<p class="aligned">
					Siendo este evento parte de la organización internacional TED, esperamos contar con su apoyo para la realización del
					TEDxUMSA debido a que es una gran oportunidad para los jóvenes bolivianos de encontrar su propósito personal y así
					formar una Bolivia mejor, mediante ideas que cambien actitudes. Esto será posible gracias a los expositores y
					auspiciadores que serán reconocidos internacionalmente a través de este evento.
				</p>
			</div>

			<div class="row">
				<div class="col s12 m3 l3 offset-m3 offset-l3">
					<h4 class="centre-line" style="text-align:center"><strong>4</strong></h4>
					<p style="text-align:center">Tenemos 4 tipos de paquetes para nuestros auspiciadores con diferentes beneficios de visibilidad antes, durante y despues del evento</p>
				</div>
				<div class="col s12 m3 l3">
					<h4 class="centre-line" style="text-align:center"><strong>+ 100</strong></h4>
					<p style="text-align:center">Llegaremos a más de 100 jovenes universitarios, 100 asistentes presenciales mas los que verán el evento transmitido en vivo por streaming y por la red RUBI</p>
				</div>
			</div>
			<br><br>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col s12 m12 l8 offset-l2">
                <div class="description-ball"></div>
                <div class="description center-align">
                    <div class="row h4-row">
						<h3 class="centre-line"><span>Nuestros Auspiciadores</span></h3>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>
<!----------------------------------------------------------------------------------------------------------->
	<!-- temporary div -->
	<div>
		<div class="container">
			<div class="row">
				<h2 class="centre-line"><span>Transformación</span></h2>
			</div>
		</div>
		<div class="wide-container">
			<!-- Gold -->
			<div id="shuffle-grids" class="row" style="">
				@foreach($transformacion as $trans)
					<div class="col s12 m6 l4 offset-m3 offset-l4">
						<div class="diamond center-block">
							<img class="materialboxed" data-caption="{{ $trans->descripcion }}" width="100%" src="{{ $trans->imagen }}">
						</div>
					</div>
				@endforeach
			</div>
		</div>
		<br><br>

		<div class="container">
			<div class="row">
				<h2 class="centre-line"><span>Aliados</span></h2>
			</div>
		</div>
		<div class="container">
			<div id="shuffle-grid" class="row amigos">
				<div class="col s12 m12 l8 offset-l2">
					@foreach($aliado as $al)
					<div class="col s12 m4 l4">
						<div class="diamond center-block">
							<img class="materialboxed" data-caption="{{ $al->descripcion }}" width="100%" src="{{ $al->imagen }}">
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
@endsection

@section('extra_js')
<script type="text/javascript">
	// Change navbar tab color when active
	$(this).siblings('li').removeClass('active');
	$(".aliados").addClass('active');
	$(document).ready(function(){
		$('.parallax').parallax();
	});
</script>
@endsection
