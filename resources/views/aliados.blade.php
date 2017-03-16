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
		   border: 1px solid black;
		   color: black;
		   font-size: 20px;
		   text-align: center;
		   align-self: center;
		   padding: 2rem;
	   }
   }
</style>
@endsection

@section('content')

<div class="section scrollspy" id="works">
	<div class="container">
		<div class="row">
			<h2>Auspiciadores</h2>
		</div>
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
				<p>
					Siendo este evento parte de la organización internacional TED, esperamos contar con su apoyo para la realización del
					TEDxUMSA ya que es una gran oportunidad para los jóvenes bolivianos de encontrar su propósito personal y así formar
					una Bolivia mejor, mediante ideas que cambien actitudes.
				</p>
				<p>
					Esto será posible gracias a los expositores y auspiciadores que serán reconocidos internacionalmente a través de este
					evento.
				</p>
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
				<p>
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
					<h4 class="centre-line" style="text-align:center"><strong>+ 1000</strong></h4>
					<p style="text-align:center">Llegaremos a más de 1000 jovenes universitarios, entre los asistentes presenciales, los que verán el evento transmitido en vivo por streaming y por la red RUBI</p>
				</div>
			</div>
			<br><br>
		</div>
	</div>
</div>

	<!-- temporary div -->
	<div style="display:none;">
		<div class="container">
			<div class="row">
				<h2 class="centre-line"><span>Transformación</span></h2>
			</div>
		</div>
		<div class="wide-container">
			<!-- Gold -->
			<div id="shuffle-grids" class="row" style="">
				{{--@foreach($aliadosGold as $aliado)--}}
				<div class="col s12 m6 l4">
					<div class="diamond center-block">
						<i class="fa fa-magic fa-5x"></i>
						<p>Aliado Transformación</p>
					</div>
				</div>
				<div class="col s12 m6 l4">
					<div class="diamond center-block">
						<i class="fa fa-magic fa-5x"></i>
						<p>Aliado Transformación</p>
					</div>
				</div>
				<div class="col s12 m6 l4">
					<div class="diamond center-block">
						<i class="fa fa-magic fa-5x"></i>
						<p>Aliado Transformación</p>
					</div>
				</div>
				{{--@endforeach--}}
			</div>
		</div>
		<br><br>
		<div class="container">
			<div class="row">
				<h2 class="centre-line"><span>Innovación</span></h2>
			</div>
		</div>
		<div class="wide-container">
			<!--Platinum-->
			<div id="shuffle-grid" class="row platinum">
				{{--@foreach($aliadosPlatimun as $aliado)--}}
				<div class="col s6 m4 l3">
					<div class="diamond center-block">
						<i class="fa fa-flask fa-5x"></i>
						<p>Aliado innovacion</p>
					</div>
				</div>
				<div class="col s6 m4 l3">
					<div class="diamond center-block">
						<i class="fa fa-flask fa-5x"></i>
						<p>Aliado innovacion</p>
					</div>
				</div>
				<div class="col s6 m4 l3">
					<div class="diamond center-block">
						<i class="fa fa-flask fa-5x"></i>
						<p>Aliado innovacion</p>
					</div>
				</div>
				<div class="col s6 m4 l3">
					<div class="diamond center-block">
						<i class="fa fa-flask fa-5x"></i>
						<p>Aliado innovacion</p>
					</div>
				</div>
				{{--@endforeach--}}
			</div>
		</div>
		<br>
		<div class="container">
			<div class="row">
				<h2 class="centre-line"><span>Creatividad</span></h2>
			</div>
		</div>
		<div class="wide-container">
			<div id="shuffle-grid" class="row amigos">
				{{--@foreach($aliadosAmigos as $aliado)--}}
				<div class="col s4 m2 l2">
					<div class="diamond center-block">
						<i class="fa fa-lightbulb-o fa-5x"></i>
						<p>Aliado creatividad</p>
					</div>
				</div>
				<div class="col s4 m2 l2">
					<div class="diamond center-block">
						<i class="fa fa-lightbulb-o fa-5x"></i>
						<p>Aliado creatividad</p>
					</div>
				</div>
				<div class="col s4 m2 l2">
					<div class="diamond center-block">
						<i class="fa fa-lightbulb-o fa-5x"></i>
						<p>Aliado creatividad</p>
					</div>
				</div>
				<div class="col s4 m2 l2">
					<div class="diamond center-block">
						<i class="fa fa-lightbulb-o fa-5x"></i>
						<p>Aliado creatividad</p>
					</div>
				</div>
				<div class="col s4 m2 l2">
					<div class="diamond center-block">
						<i class="fa fa-lightbulb-o fa-5x"></i>
						<p>Aliado creatividad</p>
					</div>
				</div>
				<div class="col s4 m2 l2">
					<div class="diamond center-block">
						<i class="fa fa-lightbulb-o fa-5x"></i>
						<p>Aliado creatividad</p>
					</div>
				</div>
				{{--@endforeach--}}
			</div>
		</div>
		<br>
		<div class="container">
			<div class="row">
				<h2 class="centre-line"><span>Aliado</span></h2>
			</div>
		</div>
		<div class="wide-container">
			<div id="shuffle-grid" class="row amigos">
				{{--@foreach($aliadosAmigos as $aliado)--}}
				<div class="col s4 m2 l2">
					<div class="diamond center-block">
						<i class="fa fa-heart fa-2x"></i>
					</div>
				</div>
				<div class="col s4 m2 l2">
					<div class="diamond center-block">
						<i class="fa fa-heart fa-2x"></i>
					</div>
				</div>
				<div class="col s4 m2 l2">
					<div class="diamond center-block">
						<i class="fa fa-heart fa-2x"></i>
					</div>
				</div>
				<div class="col s4 m2 l2">
					<div class="diamond center-block">
						<i class="fa fa-heart fa-2x"></i>
					</div>
				</div>
				<div class="col s4 m2 l2">
					<div class="diamond center-block">
						<i class="fa fa-heart fa-2x"></i>
					</div>
				</div>
				<div class="col s4 m2 l2">
					<div class="diamond center-block">
						<i class="fa fa-heart fa-2x"></i>
					</div>
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
</script>
@endsection
