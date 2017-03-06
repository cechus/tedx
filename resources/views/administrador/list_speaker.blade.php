
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
                        <h3 class="box-title">Lista de Speakers (Expositores)</h3>

                        <div class="box-tools pull-right">
                            <a href="{!! route('speaker') !!}" class="btn btn-primary btn-fab-mini" title="Adicionar">

                                <i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Charla</th>
                                <th>Biografia</th>
                                <th>Imagen</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($speakers as $speaker)
                                <tr>
                                    <td>{!! $speaker->id !!}</td>
                                    <td>{!! $speaker->nombre !!}</td>
                                    <td>{!! $speaker->charla !!}</td>
                                    <td>{!! $speaker->descripcion !!}</td>
                                    <td><img src="{!! $speaker->imagen !!}" style="height: 60px;"></td>
                                    <td>
                                        <a href="{{ url('edit_speaker',array($speaker->id)) }}" class="btn btn-raised btn-success">Editar</a>
                                        <a href="{!! route('eliminar_speaker',[$speaker->id]) !!}" class="btn btn-raised btn-danger">Eliminar</a>
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
