@extends('layouts.app')

@section('content')

        <!-- The preloader we see before the whole site is loaded -->
        <div id="preloader" class="valign-wrapper">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue-only actually-black">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- A status spinner to indicate that some process is going on -->
        <div id="status">
            <div class="preloader-wrapper small active">
                <div class="spinner-layer spinner-blue-only actually-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
<!-- Triangles section -->
        <div id="triangles" class="scrollspy">
            <div id="output">
                <div class="h1-wrapper valign-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col s12">
                                <h1>TEDxUMSA</h1>
                            </div>
                        </div>
                    </div>
                    <!-- Action button -->
                    <a class="btn-floating btn-large waves-effect waves-dark green accent-2" id="explore">
                        <i class="mdi-navigation-arrow-forward indigo-text text-darken-4"></i>
                    </a>
                </div>
            </div>
        </div>
<!-- Services section -->
        <div class="section scrollspy" id="services">
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
        </div>

        <div class="container">
            <div class="divider"></div>
        </div>

@endsection
