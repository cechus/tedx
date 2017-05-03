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
    .spk-name{
        color: rgb(251, 56, 70);
        /*font-size: 150%;*/
        /*word-wrap: break-word !important;*/
    }
    .spk-bio{
        color: #000;
        font-family: 'Miriam Libre', sans-serif;
        font-size: 85% !important;
        text-align: justify;
    }
    .team > .animate > .description{
        overflow-x: hidden;
        overflow-y: auto;
    }
    #style-1::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        border-radius: 10px;
        background-color: #F5F5F5;
    }
    #style-1::-webkit-scrollbar {
        width: 5px;
        background-color: #F5F5F5;
        margin-left: 1px;
    }
    #style-1::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
        background-color: #555;
    }
</style>
@endsection

@section('content')
<div class="section scrollspy" id="">
    <div class="container">
        <div class="row" id="speakers">
            <h2>Expositores</h2>
        </div>
        <br><br><br>
    </div>
</div>

<div class="container">
    <div class="row team">
        @foreach($speakers as $speaker)
            @if($speaker->nombre !== "")
                <div class="col s12 m3 animate">
                    <div class="description-ball"></div>
                    <div class="description center-align" id="style-1">
                        <div class="row h4-row">
                            <h4 class="spk-name">{{ $speaker->nombre }}<br><small class="title">{{ $speaker->charla }}</small></h4>
                        </div>
                        <div class="row">
                            <div class="col s12 l12">
                                <p class="spk-bio">{{ $speaker->descripcion }}</p>
                            </div>
                        </div>
                    </div>
                    <img src="{{ $speaker->imagen }}" class="responsive-img" alt="{{ $speaker->nombre }}" data-pagespeed-url-hash="2781055604">
                </div>
            @else
                <div class="col s12 m3 animate">
                    <div class="description-ball"></div>
                    <div class="description center-align">
                        <div class="row h4-row">
                            <h4 class="spk-name">{{ $speaker->nombre }}<br><small>{{ $speaker->charla }}</small></h4>
                        </div>
                        <div class="row">
                            <div class="col s12 l12">
                                <p class="spk-bio">{{ $speaker->descripcion }}</p>
                            </div>
                        </div>
                    </div>
                    <img src="{{ $speaker->imagen }}" class="responsive-img" alt="{{ $speaker->nombre }}" data-pagespeed-url-hash="2781055604">
                </div>
            @endif
        @endforeach
    </div>
</div>
@endsection

@section('extra_js')
<script type="text/javascript">
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
