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

        <p>{{ $post->created_at->toFormattedDateString() }}</p>

        <img src="{{ $post->image }}" alt="">

        <p>{!! $post->description !!}</p>

        <hr>

        <!-- comments section -->
        @if(count($post->comments))
            @foreach($post->comments as $comment)
                <ul class="products-list product-list-in-box">
                    <li class="item">
                        <div class="product-img">
                            <img src="dist/img/default-50x50.gif" alt="Product Image">
                        </div>
                        <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">{{ $comment->name }}
                                <span class="label label-warning pull-right">{{ $comment->created_at->diffForHumans() }}</span>
                            </a>
                            <span class="product-description">
                                {{ $comment->comment }}
                            </span>
                        </div>
                    </li>
                </ul>
            @endforeach
        @endif
    </div><!-- /.box-body -->
</div><!-- /.box -->
@endsection
