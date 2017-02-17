@extends('layouts.app')

@section('content')
    <div class="section scrollspy" id="works">
        <div class="container">
            <div class="row">
                <h2>Aliados</h2>
            </div>
        </div>
        <div class="wide-container">
            <!-- Shuffle grid -->
            <div id="shuffle-grid" class="row">
                @foreach($aliados as $aliado)
                    <a href="javascript:" class="col s12 m6 l4  ">
                        <img src="{!! asset('img_aliados/'.$aliado->imagen) !!}" class="responsive-img" alt="{!! $aliado->nombre !!}">
                        {{--<h5>Heisenberg ice-cream</h5>--}}
                    </a>
                @endforeach
                <hr>
            </div>
        </div>
    </div>
@endsection
