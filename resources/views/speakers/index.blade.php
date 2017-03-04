@extends('layouts.app')
<style media="screen">
  .card-content {
    width: auto;
    height: 20%;
  }
</style>
@section('content')
  <div class="section scrollspy" id="services">
      <div class="container">
          <div class="row">
              <h2>Expositores</h2>

                  <!-- Recorriendo los speakers(EXPOSITORES) con foreach-->
                  @foreach ($speakers as $speak)
                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <img class="activator" src="{{ asset('img_speakers/'.$speak->imagen) }}">
                            </div>
                            <div class="card-content">
                              <span class="card-title activator grey-text text-darken-4">
                              {{ $speak->nombre }}<i class="material-icons right">more_vert</i></span>
                              <p>{{ $speak->charla }}</p>
                            </div>
                            <div class="card-reveal">
                              <span class="card-title grey-text text-darken-4">{{ $speak->nombre }}
                              <i class="material-icons right">close</i></span>
                              <h6><b>{{ $speak->charla }}</b></h6>
                              <p>{{ $speak->descripcion }}</p>
                            </div>
                        </div>
                    </div>
                  @endforeach
          </div>
          <br><br><br><br><br><br>
      </div>
  </div>
@endsection
