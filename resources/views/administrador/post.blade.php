@extends('vendor.adminlte.layouts.app')

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">POST</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    @if(isset($post))
                        {!! Form::model($post, ['route' => ['post'], 'files'=>true, 'method' => 'post']) !!}
                    @else
                        {!! Form::open(['route' => ['post'], 'files'=>true]) !!}
                    @endif
                    <div class="box-body">
                        <div class="form-group">
                            <label>Titulo</label>
                            {{ Form::text('title', null, ['class' => 'form-control','required']) }}
                        </div>
                        <div class="form-group">
                            <label>Tags</label>
                            {{ Form::select('tags[]', $tags,$tags_us, [ 'required','class' => 'form-control','multiple'=>'multiple']) }}

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Imagen</label>
                                    {!! Form::file('archivo',['accept' => 'image/*']) !!}
                                </div>
                            </div>
                            @if(isset($post->image) && !empty($post->image))
                            <div class="col-md-6">
                                <img src="{!! asset('img_posts/'.$post->image) !!}" style="height: 60px;">
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Descripcion</label>
                            {{ Form::textarea('description', null, ['class' => 'form-control','rows' => 10,'id' => 'editor1']) }}
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

@section('scripts')
    <script src="{!! asset('plugins') !!}/jquery-2.2.3.min.js"></script>
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
    });
</script>
@endsection
