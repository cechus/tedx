@extends('layouts.admin')

@section('content')
    {{--<div class="section scrollspy" id="services">
                <div class="container">
                    <div class="row">
                        <h2>We are Wata</h2>
                        <div class="col s12 m10 offset-m1 l8 offset-l2">
                            <p class="flow-text center-align">
                                We're a small local company focused on crafting special and precise products that really help in
                                your everyday life. Feel free to check out our services and explore the gallery of our works.
                            </p>
                        </div>
                    </div>

                    <!-- Row with service icons -->
                    <div class="row services">
                        <div class="col s12 l3">
                            <i class="fa fa-5x fa-paint-brush animated-color"></i>
                            <div class="divider"></div>
                            <h5>Creative design</h5>
                            <p>Inspired by the latest trends of Material design, using cutting-edge technologies for a fresh and modern look. More design, all the time</p>
                            <a class="btn waves-effect waves-dark white black-text">Learn more</a>
                        </div>
                        <div class="col s12 l3">
                            <i class="fa fa-5x fa-desktop animated-color"></i>
                            <div class="divider"></div>
                            <h5>Fits all screens</h5>
                            <p>Designed as a mobile-first application, the grid scales to fit even the largest monitors. The content always looks nice and balanced.</p>
                            <a class="btn waves-effect waves-dark white black-text">Discover</a>
                        </div>
                        <div class="col s12 l3">
                            <i class="fa fa-5x fa-cog animated-color"></i>
                            <div class="divider"></div>
                            <h5>Easily customizable</h5>
                            <p>You are welcome to customize the elements to fit your needs. The proccess is simple and pleasant thanks for a Material color palette</p>
                            <a class="btn waves-effect waves-dark white black-text">Try it</a>
                        </div>
                        <div class="col s12 l3">
                            <i class="fa fa-5x fa-code animated-color"></i>
                            <div class="divider"></div>
                            <h5>Carefully coded</h5>
                            <p>Beautiful on the outside and smart on the inside. Our code is clean, extremely readable and no trouble to modify or maintain.</p>
                            <a class="btn waves-effect waves-dark white black-text">Explore</a>
                        </div>
                    </div>
                </div>
            </div>--}}
    {{--<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        div>p>{Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam nulla maxime, beatae molestias voluptatem aspernatur ipsum facilis voluptate, itaque, modi id qui debitis corporis expedita. At labore iure dignissimos ratione.}*10
    </div>--}}



    <div class="section scrollspy" id="contact">
        <div class="container">
            <div class="row">
                <h2>LOGIN</h2>
            </div>
            <div class="row">

                <div class="col s3">
                    &nbsp;
                    </div>
                <div class="col s6">
                    {!! Form::open(['route' => ['login']]) !!}
                    <div class="row">
                        <div class="input-field col s12">
                            {{ Form::text('email', null, ['class' => 'required']) }}
                            <label>Email</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            {{ Form::text('password', null, ['class' => 'required']) }}
                            <label>Password</label>
                        </div>
                    </div>

                    <div class="center-align">
                        <button type="submit" name="send" class="btn-large">
                            INGRESAR
                        </button>
                        <a href="{!! route('register') !!}" name="send" class="btn-large">
                            REGISTRARSE
                        </a>
                    </div>
                    {!! Form::hidden('id') !!}
                    {!! Form::close() !!}
                </div>
                <div class="col s3">
                </div>


            </div>
        </div>
    </div>
@endsection
