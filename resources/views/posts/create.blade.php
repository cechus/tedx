@extends('layouts.admin')

@section('extracss')

@endsection

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Crear entrada de blog</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" method="POST" action="/administrador/posts">
        @include('posts._form')
        <!-- /.box-body -->
        <div class="box-footer">
            <button class="btn btn-default">Cancelar</button>
            <button type="submit" class="btn btn-success pull-right">Guardar</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>
@endsection

@section('extrajs')
<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('content');
</script>
@endsection
