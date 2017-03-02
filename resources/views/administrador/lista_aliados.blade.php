{{--
@extends('layouts.admin')
@section('content')

    <div class="section scrollspy" id="contact">
        <div class="container">
            <div class="row">
                <h2>Aliados</h2>
            </div>
            <div class="row">
                <table class="bordered responsive-table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Categoria</th>
                        <th>Descripcion</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lista_aliados as $aliado)
                    <tr>
                        <td>{!! $aliado->id !!}</td>
                        <td>{!! $aliado->nombre !!}</td>
                        <td>{!! $aliado->imagen !!}</td>
                        <td>{!! $aliado->categoria !!}</td>
                        <td>{!! $aliado->descripcion !!}</td>
                        <td>
                            <a href="{{ route('aliado',[$aliado->id]) }}">Editar</a>
                            <a href="{!! route('eliminar_aliado',[$aliado->id]) !!}">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

--}}




@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">

                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Lista de aliados</h3>

                        <div class="box-tools pull-right">
                            <a href="{!! route('aliado') !!}" class="btn btn-box-tool"  title="Adicionar">
                                <i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Imagen</th>
                                <th>Categoria</th>
                                <th>Descripcion</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lista_aliados as $aliado)
                                <tr>
                                    <td>{!! $aliado->id !!}</td>
                                    <td>{!! $aliado->nombre !!}</td>
                                    <td>{!! $aliado->imagen !!}</td>
                                    <td>{!! $aliado->categoria !!}</td>
                                    <td>{!! $aliado->descripcion !!}</td>
                                    <td>
                                        <a href="{{ route('aliado',[$aliado->id]) }}">Editar</a>
                                        <a href="{!! route('eliminar_aliado',[$aliado->id]) !!}">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
        </div>
    </div>
@endsection