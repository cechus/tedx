@extends('layouts.app')
    <style>
        .tit {
            text-align: center;
        }

        .tag_list  a {
    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
    color: #eee;
    display: inline-block;
    font-size: 13px;
    font-weight: 600;
    margin: 8px 0;
    padding: 0 10px;
}
.tag_list  a .btn.focus{
    color: #eee;
}
.tag_list  a:hover {
    background: #fb3846;
    color: #ffffff;
    -webkit-transform: translateY(-2px);
    transform: translateY(-2px);
    letter-spacing: inherit;
}
.border{
    border-radius: 5px;
    border:1px solid #3c3c3c;
    padding: 5px;
    margin: 3px;
}
.blog_title{
    text-align: center;
}
.commenter {
    border: 5px solid #fff;
    border-radius:50%;
    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
    display: inline-block;
}

.commenter img {
    width: 80px;
    height: 80px;
}

.comment_area .about_commenter{
    padding: 0 0 0 30px;
    width:calc(100% - 105px);
    display: inline-block;
    vertical-align:top;
}
.comment_area .col-md-12 {
    border-bottom: 1px solid #ddd;
    padding: 30px 0 26px;
}
.comment_area .col-md-12:nth-child(2n) .comment {
    margin-left: 120px;
}
.comment_area h6{
    color: #9b9b9b;
}

</style>
@section('content')
<div class="section scrollspy" id="contact">
    <div class="row">
        <h2>Blog</h2>
        <div class="col s12 m4 l3">
            <!-- Note that "m4 l3" was added -->
            <!--
            <div class="border">
                <h4>Search</h4>
                <div class="row">
                <form class="col s12">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix">Buscar...</label>
                    </div>
                </form>
             </div>
            </div>
            -->
            <div class="border">
                <h4>Archivos</h4>
                    <ul class="collection">
                    @foreach($archives as $arch)
                        <li class="collection-item"><a href="/posts?month={{ $arch['month'] }}&year={{ $arch['year']}}">{{ $arch['month'].' '.$arch['year']  }}<span class="secondary-content"> ({{ $arch['published'] }}) </span></a></li>
                    @endforeach
                    </ul>
            </div>

            <div class="border">
                <h4>Etiquetas</h4>
                    <div class="tag_list">
                        <div class="tag_list">
                    @foreach($tags as $tag)
                        <a class="btn waves-effect" href="/posts/tag/{{$tag}}">{{$tag}}</a>
                    @endforeach
                    </div>
                    </div>
            </div>
        </div>
        <div class="col s12 m8 l9" style="background:; margin-top:-100px;margin-bottom: 100px">
                <div class="row">
                    
                @foreach($posts as $post)
                <div class="col s12 m3 l4">
                    <div class="card small">

                        <div class="card-image">
                        <a href="/posts/{{$post->id}}"><img src="{{ asset('img_posts/'.$post->image) }}"></a>
                        </div>
                    <div class="card-content">
                        <p>
                        <a href="/posts/{{$post->id}}"><span class="card-title" style="font-weight:bold;color:rgba(0,0,0,1)">{{ $post->title }}</span></a>
                        </p>
                    </div>
                    </div>
                    </div>
                @endforeach  
                </div>
        </div>
    </div>
</div>
@endsection
@section('scriptside')
<script type="text/javascript">
    $('.button-collapse').sideNav({
         menuWidth: 300, 
         edge: 'left',
         closeOnClick: true,
         draggable: true 
       }
     );
</script>
@endsection