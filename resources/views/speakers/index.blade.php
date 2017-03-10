@extends('layouts.app')

@section('extra_css')
<style media="screen">
  .card-content {
    width: auto;
    height: 20%;
  }
  .col{
      display: inline-block;
  }
</style>
@endsection

@section('content')
<div class="section scrollspy" id="">
    <div class="container">
        <div class="row" id="speakers">
            <h2>Expositores</h2>
            <!-- Recorriendo los speakers(EXPOSITORES) con foreach-->
            <!-- @foreach ($speakers as $speak) -->
            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{{ $speak->imagen}}">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text ">
                        <!-- {{ $speak->nombre }}<i class="material-icons right">more_vert</i></span> -->
                        Mohammed Mostajo Radiji<i class="material-icons right">more_vert</i></span>
                        <!-- <p>{{ $speak->charla }}</p> -->
                        <p></p>
                    </div>
                    <div class="card-reveal">
                        <!-- <span class="card-title grey-text ">{{ $speak->nombre }} -->
                        <span class="card-title grey-text ">
                            Mohammed Mostajo Radiji <i class="material-icons right">close</i>
                        </span>
                        <!-- <h6><b>{{ $speak->charla }}</b></h6> -->
                        <h6><b></b></h6>
                        <!-- <p>{{ $speak->descripcion }}</p> -->
                        <p>El Dr. Mostajo Radiji es actualmente un Investigador Postdoctoral en el laboratorio Pollen del Departamento de Neurologia y del Centro Ely and Edythe Broad de Estudios en Medicina Regenerativa y Celulas Madre en la Universidad de California San Francisco. En este laboratorio, utliza distintos metodos de genomica y biologia molecular para investigar mutaciones geneticas envueltas en la evolucion del cerebro.Completó su PhD en la Universidad de Harvard donde estudió la reprogramación de neuronas y la instrucción de cambios de conectividad en circuitos cerebrales. Mas allá de su interés en la manipulacion cerebral, está activamente envuelto en educacion científica.Actualmente, es Director Ejecutivo de Clubes de Ciencia Bolivia, una organización sin fines de lucro que busca traer educación científica de la mas alta calidad a estudiantes Bolivianos. También es Miembro Directivo de la organización Clubes de Ciencia Internacional.</p>
                    </div>
                </div>
            </div>
            <!-- @endforeach -->
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
        $('#speakers').masonry({
            itemSelector: '.col'
        });
    });

    // Change navbar tab color when active
	$(this).siblings('li').removeClass('active');
	$(".expositores").addClass('active');
</script>
@endsection
