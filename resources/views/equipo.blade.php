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
</style>
@endsection

@section('content')
<!-- Equipo section -->
<div class="section scrollspy">
	<div class="container">
		<div class="row" id="equipo">
			<h2>Equipo</h2>
		</div>
		<div class="row">
			<!-- equipo tedX , recorrer con fetch-->
			<div class="col s12 m3 l3">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light" >
						<img class="img-responsive activator" id="carlos" src="images/team/carlos.png" />
						<span class="card-title activator name">
							Carlos Zabaleta
							<i class="material-icons right">more_vert</i>
						</span>
					</div>
					<!-- <div class="card-content">
						<p>Licenciatario y Organizador TEDxUMSA</p>
					</div> -->
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
					<div class="card-image waves-effect waves-block waves-light">
						<img class="img-responsive activator" src="images/team/ana2.png" />
						<span class="card-title activator name">
							Ana Quispe &nbsp; &nbsp;
							<i class="material-icons right">more_vert</i>
						</span>
					</div>
					<!-- <div class="card-content">
						<p>Directora de protocolo y Produccion ejecutiva</p>
					</div> -->
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
					<div class="card-image waves-effect waves-block waves-light">
						<img class="img-responsive activator" src="images/team/hermann2.png" />
						<span class="card-title activator name">
							Hermann Lino
							<i class="material-icons right">more_vert</i>
						</span>
					</div>
					<!-- <div class="card-content">
						<p>Director de Ventas</p><br>
					</div> -->
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
					<div class="card-image waves-effect waves-block waves-light">
						<img class="img-responsive activator" src="images/team/andres.png" />
						<span class="card-title activator name">
							Andrés Mamani
							<i class="material-icons right">more_vert</i>
						</span>
					</div>
					<!-- <div class="card-content">
						<p>Director y coordinador de Media</p><br>
					</div> -->
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">
							<b>Andrés Mamani</b>
							<i class="material-icons right">close</i></span>
							<h6>Director de Media</h6>
					</div>
				</div>
			</div>
		</div>
		<div class="row center-align">
			<div class="col s12 m3 l3">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="img-responsive activator" src="images/team/veronica.png" />
						<span class="card-title activator name">
							Verónica Clavijo
							<i class="material-icons right">more_vert</i>
						</span>
					</div>
					<!-- <div class="card-content">
						<p>Directora de relaciones externas y Curaduría</p>
					</div> -->
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
					<div class="card-image waves-effect waves-block waves-light">
						<img class="img-responsive activator" src="images/team/kevin.png" />
						<span class="card-title activator name">
							Kevin Vásquez
							<i class="material-icons right">more_vert</i>
						</span>
					</div>
					<!-- <div class="card-content">
						<p>Director Creativo de Diseño</p><br>
					</div> -->
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
					<div class="card-image waves-effect waves-block waves-light">
						<img class="img-responsive activator" src="images/team/karina.png" />
						<span class="card-title activator name">
							Karina Llanos
							<i class="material-icons right">more_vert</i>
						</span>
					</div>
					<!-- <div class="card-content">
						<p>Directora de Marketing y Relaciones Publicas</p>
					</div> -->
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
@endsection

@section('extra_js')
<script type="text/javascript">

	$(document).ready(function() {
		$('#equipo').masonry({
			itemSelector: '.col'
		});
		$('.scrollspy').scrollSpy();
	});


	// Change navbar tab color when active
	$(this).siblings('li').removeClass('active');
	$(".equipo").addClass('active');
</script>
@endsection
