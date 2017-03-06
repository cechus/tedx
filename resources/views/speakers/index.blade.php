@extends('layouts.app')
<style media="screen">
  .card-content {
    width: auto;
    height: 20%;
  }
</style>
@section('content')
<style>
  .col{
	display: inline-block;
  }
</style>
  <div class="section scrollspy" id="
	  <div class="container">
		  <div class="row" id="speakers">
			  <h2>Expositores</h2>
				  <!-- Recorriendo los speakers(EXPOSITORES) con foreach-->
				  @foreach ($speakers as $speak)
					<div class="col s12 m6 l4">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
							  <img class="activator" src="{{ $speak->imagen}}">
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text ">
							  {{ $speak->nombre }}<i class="material-icons right">more_vert</i></span>
							  <p>{{ $speak->charla }}</p>
							</div>
							<div class="card-reveal">
							  <span class="card-title grey-text ">{{ $speak->nombre }}
							  <i class="material-icons right">close</i></span>
							  <h6><b>{{ $speak->charla }}</b></h6>
							  <p>{{ $speak->descripcion }}</p>
							</div>
						</div>
					</div>
				  @endforeach

		  </div>
		  <script type="text/javascript" src="/libs/jquery/jquery-2.1.1.js"></script>
		  <!--<script type="text/javascript" src="https://unpkg.com/isotope-layout@3.0.2/dist/isotope.pkgd.min.js"></script>-->
			  <script type="text/javascript">
			  $(document).ready(function() {
				$('#speakers').masonry({
					itemSelector: '.col'
				});
			});
			  </script>
		  
		  <br><br><br><br><br><br>
	  </div>
  </div>
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