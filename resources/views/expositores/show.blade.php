@extends('layouts.admin')

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Detalles de expositor</h3>
        <div class="box-tools pull-right">
            <span class="label label-primary">Label</span>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <form class="form-horizontal">
        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" placeholder="{{ $expositore->nombre }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Charla</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="{{ $expositore->charla }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Descripcion</label>
                <div class="col-sm-10">
                    <textarea rows="5" class="form-control" placeholder="{{ $expositore->descripcion }}"></textarea>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-info pull-right">Sign in</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div><!-- /.box -->
@endsection
