@extends('layouts.app')
@section('content')
<style>
	.col{
		display: inline-block;
	}
</style>
 <!-- Equipo section -->
		<div class="section scrollspy">
			<div class="container">
					<h2>Equipo</h2>
						<p class="flow-text center-align">
							Nosotros somos el equipo organizador de TEDxUMSA
						</p>
				<div class="row" id="equipo" >
					<!-- equipo tedX , recorrer con fetch-->
					<div class="col s12 m6 l4">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light" >
							  <img class="img-responsive activator" id="carlos" src="images/team/carlos-1.jpg" />
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text text-darken-4">
							  Carlos Zabaleta<i class="material-icons right">more_vert</i></span>
							  <p>Licenciatario/Organizador</p>
							</div>
							<div class="card-reveal">
							  <span class="card-title grey-text text-darken-4"><b>Carlos Zabaleta Copa</b>
							  <i class="material-icons right">close</i></span>
							  <h6>Licenciatario/Organizador</h6>
							</div>
						</div>
					</div>
					<div class="col s12 m6 l4">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
							  <img class="img-responsive activator" src="images/team/ana-1.jpg" />
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text text-darken-4">
							  Ana Quispe<i class="material-icons right">more_vert</i></span>
							  <p>Directora de protocolo y Produccion ejecutiva</p>
							</div>
							<div class="card-reveal">
							  <span class="card-title grey-text text-darken-4"><b>Ana Quispe Sirpa</b>
							  <i class="material-icons right">close</i></span>
							  <h6>Directora de protocolo y Produccion ejecutiva</h6>
							</div>
						</div>
					</div>
					<div class="col s12 m6 l4">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
							  <img class="img-responsive activator" src="images/team/herman-1.jpg" />
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text text-darken-4">
							  Herman Lino<i class="material-icons right">more_vert</i></span>
							  <p>Director de Ventas</p>
							</div>
							<div class="card-reveal">
							  <span class="card-title grey-text text-darken-4"><b>Hermann Lino</b>
							  <i class="material-icons right">close</i></span>
							  <h6>Director de Ventas</h6>
							</div>
						</div>
					</div>
					<div class="col s12 m6 l4">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
							  <img class="img-responsive activator" src="images/team/veronica.jpg" />
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text text-darken-4">
							  Veronica Clavijo<i class="material-icons right">more_vert</i></span>
							  <p>Directora de relaciones externas y Curaduría</p>
							</div>
							<div class="card-reveal">
							  <span class="card-title grey-text text-darken-4"><b>Veronica Clavijo Altamirano</b>
							  <i class="material-icons right">close</i></span>
							  <h6>Directora de relaciones externas y Curaduría</h6>
							</div>
						</div>
					</div>
					<div class="col s12 m6 l4">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
							  <img class="img-responsive activator" src="images/team/andres.jpg" />
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text text-darken-4">
							  Andrés Mamani<i class="material-icons right">more_vert</i></span>
							  <p>Director de Media</p>
							</div>
							<div class="card-reveal">
							  <span class="card-title grey-text text-darken-4"><b>Andrés Mamani</b>
							  <i class="material-icons right">close</i></span>
							  <h6>Director de Media</h6>
							</div>
						</div>
					</div>
					<div class="col s12 m6 l4">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
							  <img class="img-responsive activator" src="images/team/kevin.jpg" />
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text text-darken-4">
							  Kevin Vásquez<i class="material-icons right">more_vert</i></span>
							  <p>Director Creativo de Diseño</p>
							</div>
							<div class="card-reveal">
							  <span class="card-title grey-text text-darken-4"><b>Kevin Vásquez</b>
							  <i class="material-icons right">close</i></span>
							  <h6>Director Creativo de Diseño</h6>
							</div>
						</div>
					</div>
					<div class="col s12 m6 l4">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
							  <img class="img-responsive activator" src="images/team/kari.jpg" />
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text text-darken-4">
							  Karina Llanos<i class="material-icons right">more_vert</i></span>
							  <p>Directora de Marketing y Relaciones Publicas</p>
							</div>
							<div class="card-reveal">
							  <span class="card-title grey-text text-darken-4"><b>Karina Alejandra Llanos</b>
							  <i class="material-icons right">close</i></span>
							  <h6>Directora de Marketing y Relaciones Publicas</h6>
							</div>
						</div>
					</div>
				</div>
				<br><br><br><br><br><br>
			</div>
		</div>
		<script type="text/javascript" src="/libs/jquery/jquery-2.1.1.js"></script>
		  <!--<script type="text/javascript" src="https://unpkg.com/isotope-layout@3.0.2/dist/isotope.pkgd.min.js"></script>-->
		  <script type="text/javascript" src="/libs/masonry/dist/masonry.min.js"></script>
			  <script type="text/javascript">
			  $(document).ready(function() {
				$('#equipo').masonry({
					itemSelector: '.col'
				});
			});
		</script>  
@endsection
@section('scriptside')
<script type="text/javascript">
    $('.button-collapse').sideNav({
         menuWidth: 300, 
         edge: 'left',
         closeOnClick: true,
         draggable: true 
       }
     );
</script>
@endsection