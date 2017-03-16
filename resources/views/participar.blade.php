@extends('layouts.app')

@section('content')
<!-- Participar section -->
<div class="section scrollspy" id="contact">
    <div class="container">
        <div class="row">
            <h2>Participar</h2>
            <div class="col s12 m10 offset-m1 l8 offset-l2">
                <p class="flow-text center-align">Se parte de nosotros participa en nuestro evento.</p>
            </div>
        </div>
        <div class="row services">
            <div class="col s12 l4">
                <a href="/error">
                    <i class="fa fa-5x fa-microphone animated-color"></i>
                    <div class="divider"></div>
                    <h5>Recomendar un Expositor</h5>
                </a>
                <p></p>
            </div>

            <div class="col s12 l4">
                <a href="http://bit.ly/SoyParteDeTEDxUMSA">
                    <i class="fa fa-5x fa-comments-o animated-color"></i>
                    <div class="divider"></div>
                    <h5>Asistir Al evento</h5>
                </a>
                <p></p>
            </div>
            <div class="col s12 l4">
                <a href="/error">
                    <i class="fa fa-5x fa-user-plus animated-color"></i>
                    <div class="divider"></div>
                    <h5>Ser voluntario</h5>
                    <p></p>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra_js')
<script type="text/javascript">
    $('.button-collapse').sideNav({

    // Change navbar tab color when active
	$(this).siblings('li').removeClass('active');
	$(".participar").addClass('active');
</script>
@endsection
