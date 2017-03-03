@extends('layouts.app')
	<style>
		.tit {
			text-align: center;
		}
		
		.tag_list  a {
	box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
	color: #666666;
	display: inline-block;
	font-size: 13px;
	font-weight: 600;
	margin: 8px 0;
	padding: 0 10px;
}
.tag_list  a .btn.focus{
	color: #666666;
}
.tag_list  a:hover {
	background: #ff4081;
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
			<div class="border"> 
				<h4>Archives</h4>
					<ul class="collection">
                    @foreach($archives as $arch)
						<li class="collection-item"><a href="/posts?month={{ $arch['month'] }}&year={{ $arch['year']}}">{{ $arch['month'].' '.$arch['year']  }}<span class="secondary-content"> ({{ $arch['published'] }}) </span></a></li>
                    @endforeach
					</ul>
			</div>
	
			<div class="border">
				<h4>tags</h4>
					<div class="tag_list">
						<div class="tag_list">
                    @foreach($tags as $tag)
                        <a class="btn waves-effect" href="/posts/tag/{{$tag}}">{{$tag}}</a>
                    @endforeach
                    </div>
					</div>
			</div>
		</div>
		<div class="col s12 m8 l9" style="background: #eee">
			<div class="bloggrid_left">

                @foreach($posts as $post)
                    <div class="panel">
                        <h3 class="panel-title">
                        <a href="/posts/{{$post->id}}">{{ $post->title }}</a></h3>
                      <div class="panel-body">
                        {{ $post->description }}
                      </div>
                    </div>
                    <hr>
                @endforeach
                                <!--<div class="blog_top">
                                    <h3 class="blog_title">Lorem Ipsum
                                    </h3>
                                	<figure class="postImg waves-effect">
	                                    <img src="images/logo/TEDxUMSA.png" alt="">
                                	</figure>
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa fa-calendar"></i>June 18,2015</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-comments" aria-hidden="true"></i>2
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog_content">
                                    <p>Learn how to improve your playing quality and even overall understanding of online gaming and how you perform while playing online. Gaming online is a huge business nowadays and that means that there are millions of people worldwide at online game sites all the time. Many are people just like you and me that like to play online and have fun doing it. Some of these people enjoy it so much.</p>
                                    <p>Working on skills will not only help you improve your success while playing online games but will also give you higher self-esteem and a sense of achievement. And remember that the faster you master the easy games, you can turn to the more complicated ones and match your brain and skills against the real experts.</p>
                                    <blockquote>
                                        Learn how to improve your playing quality and even overall understanding of online gaming and how you perform while playing online. Gaming online is a huge business nowadays and that means that there are millions of people worldwide at online game sites all the time
                                    </blockquote>
                               <p>Gaming online is a huge business nowadays and that means that there are millions of people worldwide at online game sites all the time. Many are people just like you and me that like to play online and have fun doing it. Some of these people enjoy it  are millions of people worldwide so much.
                                </p>
                                </div>
                                <div class="share_comment">
                                   <h5>
                                        <i class="fa fa-tag"></i>
                                        <a class="btn btn-info" href="#">World</a>
                                        <a class="btn btn-info" href="#">World</a>
                                        <a class="btn btn-info" href="#">World</a>
                                        <a class="btn btn-info" href="#">World</a>
                                        
                                    </h5>
                                </div>
                                <div class="comment_area">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Comentarios (3)</h3>
                                            <div class="comment">
                                                <div class="commenter">
                                                    <img src="/images/blog/coment_siluete.png" alt="">
                                                </div>
                                                <div class="about_commenter">
                                                   <h5><a href="#">Faridul Haque</a></h5>
                                                   <h6>18 Hours ago</h6>
                                                    <p>Many are people just like you and me that like to play online and have fun doing it. Some of these people enjoy it so much.</p>
                                                    <a href="#">Reply</a>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="comment">
                                                <div class="commenter">
                                                    <img src="/images/blog/coment_siluete.png" alt="">
                                                </div>
                                                <div class="about_commenter">
                                                   <h5><a href="#">Faridul Haque</a></h5>
                                                   <h6>18 Hours ago</h6>
                                                    <p>Many are people just like you and me that like to play online and have fun doing it. Some of these people enjoy it so much.</p>
                                                    <a href="#">Reply</a>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="comment">
                                                <div class="commenter">
                                                    <img src="/images/blog/coment_siluete.png" alt="">
                                                </div>
                                                <div class="about_commenter">
                                                   <h5><a href="#">Faridul Haque</a></h5>
                                                   <h6>18 Hours ago</h6>
                                                    <p>Many are people just like you and me that like to play online and have fun doing it. Some of these people enjoy it so much.</p>
                                                    <a href="#">Reply</a>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="leave_comment">
                                    <div class="row">
                                        <div class="col-xs-12">
                                           <h3>Deja tu comentario</h3>
                                        </div>
                                    </div>
                                    <form action="index.html" method="get">
                                        <div class="row jsSubmit_button">
                                            <div class="input-field col-md-4">
                                                <input id="contact_name" type="text" class="validate" required="">
                                                <label for="contact_name">
                                                    <i class="zmdi zmdi-account"></i>Nombre
                                                    <span>*</span>
                                                </label>
                                            </div>
                                            <div class="input-field col-md-12">
                                                <textarea id="textarea1" class="materialize-textarea" required=""></textarea>
                                                <label for="textarea1"><i class="zmdi zmdi-border-color"></i>Comentario
                                                    <span>*</span>
                                                </label>

                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="th_bt btn waves-effect" disabled="">
                                                    Nuevo Comentario<i class="zmdi zmdi-mail-send"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>-->
            </div>
		</div>
	</div>
</div>
@endsection
