@extends('vendor.adminlte.layouts.app')

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Speaker</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    @if(isset($speaker))
                        {!! Form::model($speaker, ['route' => ['speaker'], 'files'=>true, 'method' => 'post']) !!}
                    @else
                        {!! Form::open(['route' => ['speaker'], 'files'=>true]) !!}
                    @endif
                        <div class="box-body">
                            <div class="form-group">
                                <label>Nombre de Expositor</label>
                                {{ Form::text('nombre', null, ['class' => 'form-control','required']) }}
                            </div>
                            <div class="form-group">
                                <label>Titulo de Charla</label>
                                {{ Form::text('charla', null, ['class' => 'form-control','required']) }}
                            </div>
                            <div class="form-group">
                                <label>Imagen del Expositor</label>
                                {!! Form::file('imagen',['accept' => 'image/*']) !!}
                            </div>
                            <div class="form-group">
                                <label>Biografia del Expositor</label>
                                {{ Form::textarea('descripcion', null, ['class' => 'form-control','rows' => 4]) }}
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    {!! Form::hidden('id') !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
