@extends('layouts.app')

@section('extra_css')
<style>
	.col{
		display: inline-block;
	}
	.card{
		display: inline-block;
	}
	.card a, .card i{
		color: #fff !important;
	}
	.name{
		color: #fff !important;
	}
	.parallax-container {
        height: 450px !important;
    }
</style>
@endsection

@section('content')
<!-- Equipo section -->
<div class="section scrollspy">
	<div class="container">
		<div class="row" id="equipo">
			<h2>Equipo</h2>
		</div>
	</div>

	<div class="parallax-container">
	    <div class="parallax"><img src="images/team/carrousel/6.jpg"></div>
	</div>

	<div class="container">
		<div class="row">
			<!-- equipo tedX , recorrer con fetch-->
			<div class="col s12 m3 l3">
				<div class="card">
					<div class="card-image" >
						<img class="activator" id="carlos" src="images/team/carlos.jpg" />
						<span class="card-title activator name">
							Carlos Zabaleta
							<i class="material-icons right">more_vert</i>
						</span>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">
							<b>Carlos Zabaleta Copa</b>
							<i class="material-icons right">close</i>
						</span>
						<h6>Licenciatario y Organizador TEDxUMSA</h6>
					</div>
				</div>
			</div>
			<div class="col s12 m3 l3">
				<div class="card">
					<div class="card-image">
						<img class="img-responsive activator" src="images/team/ana.jpg" />
						<span class="card-title activator name">
							Ana Quispe &nbsp; &nbsp;
							<i class="material-icons right">more_vert</i>
						</span>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">
							<b>Ana Quispe</b>
							<i class="material-icons right">close</i>
						</span>
						<h6>Directora de protocolo y Produccion ejecutiva</h6>
					</div>
				</div>
			</div>
			<div class="col s12 m3 l3">
				<div class="card">
					<div class="card-image">
						<img class="img-responsive activator" src="images/team/hermann2.jpg" />
						<span class="card-title activator name">
							Hermann Lino
							<i class="material-icons right">more_vert</i>
						</span>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">
							<b>Hermann Lino</b>
							<i class="material-icons right">close</i>
						</span>
						<h6>Director de Ventas</h6>
					</div>
				</div>
			</div>
			<div class="col s12 m3 l3">
				<div class="card">
					<div class="card-image">
						<img class="img-responsive activator" src="images/team/andres.jpg" />
						<span class="card-title activator name">
							Andrés Mamani
							<i class="material-icons right">more_vert</i>
						</span>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">
							<b>Andrés Mamani</b>
							<i class="material-icons right">close</i>
						</span>
							<h6>Director de Media</h6>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m3 l3">
				<div class="card">
					<div class="card-image">
						<img class="img-responsive activator" src="images/team/veronica.jpg" />
						<span class="card-title activator name">
							Verónica Clavijo
							<i class="material-icons right">more_vert</i>
						</span>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">
							<b>Verónica Clavijo</b>
							<i class="material-icons right">close</i>
						</span>
						<h6>Directora de relaciones externas con expositores y Curaduría</h6>
					</div>
				</div>
			</div>
			<div class="col s12 m3 l3">
				<div class="card">
					<div class="card-image">
						<img class="img-responsive activator" src="images/team/kevin1.jpg" />
						<span class="card-title activator name">
							Kevin Vásquez
							<i class="material-icons right">more_vert</i>
						</span>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">
							<b>Kevin Vásquez</b>
							<i class="material-icons right">close</i>
						</span>
						<h6>Director Creativo de Diseño</h6>
					</div>
				</div>
			</div>
			<div class="col s12 m3 l3">
				<div class="card">
					<div class="card-image">
						<img class="img-responsive activator" src="images/team/karina.jpg" />
						<span class="card-title activator name">
							Karina Llanos
							<i class="material-icons right">more_vert</i>
						</span>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">
							<b>Karina Alejandra Llanos</b>
							<i class="material-icons right">close</i>
						</span>
						<h6>Directora de Marketing y Relaciones Publicas</h6>
					</div>
				</div>
			</div>
		</div>
		<br><br><br><br><br><br>
	</div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script type="text/javascript" src="{{ asset('/') }}libs/materialize/js/materialize.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.carousel.carousel-slider').carousel({fullWidth: true});
	});
</script>
@endsection

@section('extra_js')
<script type="text/javascript">

	$(document).ready(function() {
		// $('#equipo').masonry({
		// 	itemSelector: '.col'
		// });
		$('.scrollspy').scrollSpy();
		$('.parallax').parallax();
	});

	// Change navbar tab color when active
	$(this).siblings('li').removeClass('active');
	$(".equipo").addClass('active');
</script>
@endsection
