@extends('layouts.app')

@section('extra_css')
<style>
.col{
	display: inline-block;
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
						<img class="img-responsive activator" id="carlos" src="images/team/carlos.jpg" />
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">
							Carlos Zabaleta
							<i class="material-icons right">more_vert</i>
						</span>
						<p>Licenciatario / Organizador</p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">
							<b>Carlos Zabaleta Copa</b>
							<i class="material-icons right">close</i>
						</span>
						<h6>Licenciatario/Organizador</h6>
					</div>
				</div>
			</div>
			<div class="col s12 m3 l3">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="img-responsive activator" src="images/team/ana.jpg" />
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">
							Ana Quispe
							<i class="material-icons right">more_vert</i>
						</span>
						<p>Directora de protocolo y Produccion ejecutiva</p>
						<br>
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
					<div class="card-image waves-effect waves-block waves-light">
						<img class="img-responsive activator" src="images/team/hermann.jpg" />
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">
							Hermann Lino
							<i class="material-icons right">more_vert</i>
						</span>
						<p>Director de Ventas</p>
						<br>
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
					<div class="card-image waves-effect waves-block waves-light">
						<img class="img-responsive activator" src="images/team/andres.jpg" />
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">
							Andrés Mamani
							<i class="material-icons right">more_vert</i>
						</span>
						<p>Director de Media</p>
						<br>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">
							<b>Andrés Mamani</b>
							<i class="material-icons right">close</i></span>
							<h6>Director de Media</h6>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m3 l3 offset-m1 offset-l1">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="img-responsive activator" src="images/team/veronica.jpg" />
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">
							Verónica Clavijo
							<i class="material-icons right">more_vert</i>
						</span>
						<p>Directora de relaciones externas y Curaduría</p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">
							<b>Verónica Clavijo Altamirano</b>
							<i class="material-icons right">close</i>
						</span>
						<h6>Directora de relaciones externas y Curaduría</h6>
					</div>
				</div>
			</div>
			<div class="col s12 m3 l3">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="img-responsive activator" src="images/team/kevin.png" />
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">
							Kevin Vásquez
							<i class="material-icons right">more_vert</i>
						</span>
						<p>Director Creativo de Diseño</p>
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
					<div class="card-image waves-effect waves-block waves-light">
						<img class="img-responsive activator" src="images/team/karina.jpg" />
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">
							Karina Llanos
							<i class="material-icons right">more_vert</i>
						</span>
						<p>Directora de Marketing y Relaciones Publicas</p>
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
@endsection

@section('extra_js')
<script type="text/javascript">
	$('.button-collapse').sideNav({
		menuWidth: 300,
		edge: 'left',
		closeOnClick: true,
		draggable: true
	});

	$(document).ready(function() {
		$('#equipo').masonry({
			itemSelector: '.col'
		});
	});

	// Change navbar tab color when active
	$(this).siblings('li').removeClass('active');
	$(".equipo").addClass('active');
</script>
@endsection
