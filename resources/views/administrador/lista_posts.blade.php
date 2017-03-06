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
                        <h3 class="box-title">Lista de Posts</h3>

                        <div class="box-tools pull-right">
                            <a href="{!! route('post') !!}" class="btn btn-box-tool" title="Adicionar">
                                <i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Titulo</th>
                                <th>Descripcion</th>
                                <th>Fecha</th>
                                <th>Imagen</th>
                                <th>Tags</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lista_posts as $post)
                                <tr>
                                    <td>{!! $post->id !!}</td>
                                    <td>{!! $post->title !!}</td>
                                    <td style="font-size: 11px !important;">{!! $post->description !!}</td>
                                    <td>{!! $post->date !!}</td>
                                    <td>
                                        <img src="{!! asset('img_posts/'.$post->image) !!}" style="height: 60px;">

                                    </td>
                                    <td>
                                        @foreach($post->tags as $tag)
                                            {!! $tag->name !!}
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ route('post',[$post->id]) }}" class="btn btn-raised btn-success">Editar</a>
                                        <a href="{!! route('eliminar_post',[$post->id]) !!}" class="btn btn-raised btn-danger">Eliminar</a>
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
