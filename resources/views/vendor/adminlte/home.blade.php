@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Bievenido  <span class="hidden-xs">{{ Auth::user()->name }}</span>!! </h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body">
						Inicio de sesión con éxito!!
						<p>
							Esta es la pagina principal del Administrador.
						</p>
						<hr>
						<p>	En el lado izquierdo se encuentran las opciones
							para administrar la página web de TEDxUmsa:
						</p>
						<ul>
							<li> Aliados</li>
							<li> Posts </li>
							<li> Speakers (Expositores) </li>
							<li> Tags (Posts)</li>
						</ul>
						<br>
						<p>Aún nos encontramos desarrollando nuevas funcionalidades.</p>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>
@endsection
