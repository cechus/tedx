@extends('layouts.admin')

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-dollar"></i> Auspiciadores</h3>
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
                    <th style="width: 20%">Categoría</th>
                    <th style="width: 45%">Descripción</th>
                    <th style="width: 5%">Foto</th>
                    <th style="width: 10%">Acciones</th>
                </tr>

                @foreach($auspiciadores as $auspiciador)
                <tr>
                    <td>{{ $auspiciador->id }}</td>
                    <td>{{ $auspiciador->nombre }}</td>
                    <td>{{ $auspiciador->categoria }}</td>
                    <td>{{ str_limit($auspiciador->descripcion, 300) }}...</td>
                    <td><img src="../{{ $auspiciador->imagen }}" style="height:40px; width:40px"></td>
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
