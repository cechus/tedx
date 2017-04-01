@extends('layouts.admin')

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-newspaper-o"></i> Vista previa del Post</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-sm btn-success" type="button" name="button"><i class="fa fa-plus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <h1>{{ $post->title }}</h1>
        <img src="{{ $post->image }}" alt="">
        <p>{!! $post->description !!}</p>
    </div><!-- /.box-body -->
</div><!-- /.box -->
@endsection
