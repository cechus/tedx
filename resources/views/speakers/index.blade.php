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
            <!-- @foreach ($speakers as $speaker)
            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{{ $speaker->imagen}}">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text ">
                        {{ $speaker->nombre }}<i class="material-icons right">more_vert</i></span>
                        <p>{{ $speaker->charla }}</p>
                        <p></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text ">
                            {{ $speaker->nombre }}
                            <i class="material-icons right">close</i>
                        </span>
                        <h6><b>{{ $speaker->charla }}</b></h6>
                        <h6><b></b></h6>
                        <p>{{ $speaker->descripcion }}</p>
                    </div>
                </div>
            </div>
            @endforeach -->
        </div>
        <br><br><br><br><br><br>
    </div>
</div>

<div class="container">
    <div class="row team">
        @foreach($speakers as $speaker)
        <div class="col s12 m6 animate">
            <div class="description-ball"></div>
            <div class="description center-align">
                <div class="row h4-row">
                    <h4>{{ $speaker->nombre }}<br><small>{{ $speaker->charla }}</small></h4>
                </div>
                <div class="row">
                    <div class="col s12 l12">
                        <p>{{ $speaker->descripcion }}</p>
                    </div>
                </div>
            </div>
            <img src="{{ $speaker->imagen }}" class="responsive-img" alt="{{ $speaker->nombre }}" data-pagespeed-url-hash="2781055604" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
        </div>
        @endforeach
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
