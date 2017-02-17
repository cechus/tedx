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
	background: red;
	border:1px solid #3c3c3c;
	padding: 5px;
	margin: 3px;
}
.blog_title{
	text-align: center;
}
</style>
@section('content')
<div class="section scrollspy" id="contact">
	<div class="row">
		<h2>Blog</h2>
		<div class="col s12 m4 l3" style="background: #3b5998">
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
						<li class="collection-item"><a href="#">March 2016<span class="secondary-content">(10)</span></a></li>
						<li class="collection-item"><a href="#">March 2016<span class="secondary-content">(10)</span></a></li>
						<li class="collection-item"><a href="#">March 2016<span class="secondary-content">(10)</span></a></li>
						<li class="collection-item"><a href="#">March 2016<span class="secondary-content">(10)</span></a></li>
						<li class="collection-item"><a href="#">March 2016<span class="secondary-content">(10)</span></a></li>
						<li class="collection-item"><a href="#">March 2016<span class="secondary-content">(10)</span></a></li>
						<li class="collection-item"><a href="#">March 2016<span class="secondary-content">(10)</span></a></li>
						<li class="collection-item"><a href="#">March 2016<span class="secondary-content">(10)</span></a></li>
						<li class="collection-item"><a href="#">March 2016<span class="secondary-content">(10)</span></a></li>
						<li class="collection-item"><a href="#">March 2016<span class="secondary-content">(10)</span></a></li>
						
					</ul>
			</div>
	
			<div class="border">
				<h4>tags</h4>
					<div class="tag_list">
						<a class="btn waves-effect" href="#!">creative</a>
						<a class="btn waves-effect" href="#!">Web design</a>
						<a class="btn waves-effect" href="#!">Photography</a>
						<a class="btn waves-effect" href="#">Graphic</a>
						<a class="btn waves-effect" href="#!">Ui/UX</a>
						<a class="btn waves-effect" href="#!">Material Design</a>
						<a class="btn waves-effect" href="#!">Animation</a>
					</div>
			</div>
		</div>
		<div class="col s12 m8 l9" style="background: #eee">
			<div class="bloggrid_left">
                                <div class="blog_top">
                                    <h3 class="blog_title">10 beautiful place in the world
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
                                    <ul class="share_social">
                                       <li>
                                            <a href="#!">
                                                <i class="zmdi zmdi-facebook waves-effect"></i>
                                            </a>
                                        </li> 
                                       <li>
                                           <a href="#!">
                                               <i class="zmdi zmdi-twitter waves-effect"></i>
                                            </a>
                                        </li> 
                                       <li>
                                           <a href="#!">
                                               <i class="zmdi zmdi-linkedin waves-effect"></i>
                                            </a>
                                        </li> 
                                       <li>
                                            <a href="#!">
                                               <i class="zmdi zmdi-google waves-effect"></i>
                                            </a>
                                        </li> 
                                       <li>
                                           <a href="#!">
                                               <i class="zmdi zmdi-pinterest waves-effect"></i>
                                            </a>
                                        </li> 
                                    </ul>
                                </div>
                                <div class="about_auther">
                                    <div class="auther">
                                        <img src="img/comment_1.jpg" alt="">
                                    </div>
                                    <div class="auther_details">
                                        <h5><a href="#">Nadia Afnan</a></h5>
                                        <p>Many are people just like you and me that like to play online and have fun doing it. Some of these people enjoy it so much. Working on skills will not only help you improve your success while playing online .</p>
                                    </div>  
                                </div>
                                
                                <div class="comment_area">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Comments (3)</h3>
                                            <div class="comment">
                                                <div class="commenter">
                                                    <img src="img/comment_2.jpg" alt="">
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
                                                    <img src="img/comment_2.jpg" alt="">
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
                                                    <img src="img/comment_2.jpg" alt="">
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
                                           <h3>LEAVE A COMMENT</h3>
                                        </div>
                                    </div>
                                    <form action="index.html" method="get">
                                        <div class="row jsSubmit_button">
                                            <div class="input-field col-md-4">
                                                <input id="contact_name" type="text" class="validate" required="">
                                                <label for="contact_name">
                                                    <i class="zmdi zmdi-account"></i>First Name
                                                    <span>*</span>
                                                </label>
                                            </div>
                                            <div class="input-field col-md-4">
                                                <input id="contact_email" type="email" class="validate" required="">
                                                    <label for="contact_email"><i class="zmdi zmdi-email"></i>Your Email
                                                    <span>*</span>
                                                </label>
                                            </div>
                                            <div class="input-field col-md-4">
                                                <input id="website" type="text" class="validate" required="">
                                                    <label for="website"><i class="zmdi zmdi-globe"></i>Your website
                                                    <span>*</span>
                                                </label>
                                            </div>
                                            <div class="input-field col-md-12">
                                                <textarea id="textarea1" class="materialize-textarea" required=""></textarea>
                                                <label for="textarea1"><i class="zmdi zmdi-border-color"></i>Your massage
                                                    <span>*</span>
                                                </label>

                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="th_bt btn waves-effect" disabled="">
                                                    send<i class="zmdi zmdi-mail-send"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
		</div>
	</div>
</div>
@endsection
