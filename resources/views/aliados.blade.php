@extends('layouts.app')
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
      h3
      {
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
    background-color: #69f0ae; }

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
    .amigos {
        width: 50%;
        height: 50%;
        text-align: center;
    }
    .platinum {
        width: 85%;
        height: 85%;
    }
</style>
@section('content')
    <div class="section scrollspy" id="works">
        <div class="container">
            <div class="row">
                <h2>Aliados</h2>
            </div>
        </div>
        <br>
        <br>
        <br>
         <div class="container">
             <div class="row">
               <h2 class="centre-line"><span>Aliados gold</span></h2>
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
            </div>
        </div>
        <br><br>
        <div class="container">
             <div class="row">
               <h2 class="centre-line"><span>Aliados platinum</span></h2>
            </div>
        </div>
        <div class="wide-container">
            <div id="shuffle-grid" class="row platinum">
                @foreach($aliados as $aliado)
                    <a href="javascript:" class="col s12 m6 l4">
                        <img src="{!! asset('img_aliados/'.$aliado->imagen) !!}" class="responsive-img" alt="{!! $aliado->nombre !!}">
                        {{--<h5>Heisenberg ice-cream</h5>--}}
                    </a>
                @endforeach
            </div>
        </div>
        
        <div class="container">
             <div class="row">
               <h2 class="centre-line"><span>Amigos</span></h2>
            </div>
        </div>
        <div class="wide-container">
            <div id="shuffle-grid" class="row amigos">
                @foreach($aliados as $aliado)
                    <a href="javascript:" class="col s12 m3">
                        <img src="{!! asset('img_aliados/'.$aliado->imagen) !!}" class="responsive-img" alt="{!! $aliado->nombre !!}">
                        {{--<h5>Heisenberg ice-cream</h5>--}}
                    </a>
                @endforeach
            </div>
        </div>

    </div>
@endsection
