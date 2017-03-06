
@extends('vendor.adminlte.layouts.app')

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Aliado</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    @if(isset($aliado))
                        {!! Form::model($aliado, ['route' => ['aliado'], 'files'=>true, 'method' => 'post']) !!}
                    @else
                        {!! Form::open(['route' => ['aliado'], 'files'=>true]) !!}
                    @endif
                        <div class="box-body">
                            <div class="form-group">
                                <label>Categoria</label>
                                {{ Form::select('categoria', ['Gold' => 'Gold','Platinum' => 'Platinum','Amigos' => 'Amigos'],null, [ 'required','class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                <label>Imagen</label>
                                {!! Form::file('archivo',['accept' => 'image/*']) !!}
                            </div>
                            <div class="form-group">
                                <label>Nombre</label>
                                {{ Form::text('nombre', null, ['class' => 'form-control','required']) }}
                            </div>
                            <div class="form-group">
                                <label>Descripcion</label>
                                {{ Form::textarea('descripcion', null, ['class' => 'form-control','rows' => 3]) }}
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-raised btn-primary">Guardar</button>
                        </div>
                    {!! Form::hidden('id') !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
