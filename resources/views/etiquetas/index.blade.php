@extends('layouts.admin')

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-tag"></i> Etiquetas de posts</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-sm btn-success" type="button" name="button"><i class="fa fa-plus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <table class="table table-bordered table-responsive">
            <tbody>
                <tr>
                    <th style="width: 5%">#</th>
                    <th style="width: 15%">Nombre</th>
                    <th style="width: 10%">Acciones</th>
                </tr>

                @foreach($etiquetas as $etiqueta)
                <tr>
                    <td>{{ $etiqueta->id }}</td>
                    <td>{{ $etiqueta->nombre }}</td>
                    <td>
                        <div class="btn-group">
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
