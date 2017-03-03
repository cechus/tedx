@extends('layouts.app')

@section('content')
  <div class="section scrollspy" id="services">
      <div class="container">
          <div class="row">
              <h2>Expositores</h2>
              <div class="col s12 m10 offset-m1 l8 offset-l2">
              </div>
                  <!-- Recorriendo los speakers(EXPOSITORES) con foreach-->
                  @foreach ($speakers as $speak)
                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <img class="activator" src="{{ $speak->imagen}}">
                            </div>
                            <div class="card-content">
                              <span class="card-title activator grey-text text-darken-4">
                              {{ $speak->nombre }}<i class="material-icons right">more_vert</i></span>
                              <p> <b>{{ $speak->charla }}</b> </p>
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
