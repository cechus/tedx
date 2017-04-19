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
        font-size: 20px;
    }
    .spk-bio{
        font-size: 12px !important;
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
                <div class="col s12 m4 animate">
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
                    <img src="{{ $speaker->imagen }}" class="responsive-img" alt="{{ $speaker->nombre }}" data-pagespeed-url-hash="2781055604" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                </div>
            @else
                <div class="col s12 m4 animate">
                    <!-- <div class="description-ball"></div>
                    <div class="description center-align">
                        <div class="row h4-row">
                            <h4 class="spk-name">{{ $speaker->nombre }}<br><small>{{ $speaker->charla }}</small></h4>
                        </div>
                        <div class="row">
                            <div class="col s12 l12">
                                <p class="spk-bio">{{ $speaker->descripcion }}</p>
                            </div>
                        </div>
                    </div> -->
                    <img src="{{ $speaker->imagen }}" class="responsive-img" alt="{{ $speaker->nombre }}" data-pagespeed-url-hash="2781055604" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
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
