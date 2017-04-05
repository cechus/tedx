@extends('layouts.admin')

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-newspaper-o"></i> Posts</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-sm btn-success" type="button" name="button"><i class="fa fa-plus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <table class="table table-bordered table-responsive">
            <tbody>
                <tr>
                    <th style="width: 5%">#</th>
                    <th style="width: 15%">Titulo</th>
                    <th style="width: 45%">Descripción</th>
                    <th style="width: 20%">Fecha</th>
                    <th style="width: 5%">Imagen</th>
                    <th style="width: 10%">Acciones</th>
                </tr>

                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{!! $post->description !!}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->image }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="posts/{{ $post->id }}"><button class="btn btn-sm btn-primary" type="button" name="button"><i class="fa fa-eye"></i></button></a>
                            <button class="btn btn-sm btn-warning" type="button" name="button"><i class="fa fa-pencil-square-o"></i></button>
                            <button class="btn btn-sm btn-danger" type="button" name="button"><i class="fa fa-trash-o"></i></button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div><!-- /.box-body -->
</div><!-- /.box -->
@endsection
