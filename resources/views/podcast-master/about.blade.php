@extends('podcast-master-layout')


@section('cont')

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar py-4" role="banner">

        <div class="container">
            <div class="row align-items-center">


                <div class="col-3">
                    <h1 class="site-logo"><a href="{{url('home')}}" class="h2">Vekpod<span class="text-primary">.</span> </a></h1>
                </div>
                <div class="col-9">
                    <nav class="site-navigation position-relative text-right text-md-right" role="navigation">



                        <div class="d-block d-lg-none ml-md-0 mr-auto"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li>
                                <a href="{{url('home')}}">Home</a>
                            </li>
                            <li class="has-children">
                                <a href="#">Dropdown</a>
                                <ul class="dropdown arrow-top">
                                    <li><a href="#">Menu One</a></li>
                                    <li><a href="#">Menu Two</a></li>
                                    <li><a href="#">Menu Three</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="{{url('about')}}">About</a></li>
                            <li><a href="{{url('contact')}}">Contact</a></li>
                            {{--                            <li><a href="login-register.html">Login / Register</a></li>--}}
                        </ul>
                    </nav>


                </div>

            </div>
        </div>

    </header>

    <div class="site-blocks-cover inner-page-cover bg-light mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center">
                    <h1 class="mb-0">About Podcast</h1>
                    <a href="{{url('home')}}">Home</a><span class="mx-2">&bullet;</span> About Us
                </div>
            </div>
        </div>
    </div>

    <div class="site-section pt-3">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="display-5 mb-3 text-black">About The Company</h2>
                </div>
                <div class="col-lg-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusantium, deleniti repellendus ullam accusamus molestiae explicabo quo consequuntur assumenda, voluptatum!</p>
                </div>
                <div class="col-lg-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit nisi, tenetur numquam explicabo consectetur provident illo.</p>
                </div>
            </div>
            <div class="row  justify-content-around">
                <div class="col-md-12">

                    <img src="{{asset('assets/images/1x/asset-1.png')}}" alt="Image" class="img-fluid mb-5">
                </div>
            </div>
        </div>
    </div>


    <div class="site-section pt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5">
                    <h2 class="display-5 mb-5 text-black">The Podcaster</h2>
                </div>
                <div class="col-md-6 col-lg-4 text-center mb-5">
                    <img src="{{asset('assets/images/person_1.jpg')}}" alt="Image" class="img-fluid w-50 rounded-circle mb-3">
                    <h2 class="text-black font-weight-light mb-4">Jean Smith</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ab quas facilis obcaecati non ea, est odit repellat distinctio incidunt, quia aliquam eveniet quod deleniti impedit sapiente atque tenetur porro?</p>
                    <p>
                        <a href="#" class="pl-0 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
                    </p>
                </div>
                <div class="col-md-6 col-lg-4 text-center mb-5">
                    <img src="{{asset('assets/images/person_2.jpg')}}" alt="Image" class="img-fluid w-50 rounded-circle mb-3">
                    <h2 class="text-black font-weight-light mb-4">Claire Smith</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ab quas facilis obcaecati non ea, est odit repellat distinctio incidunt, quia aliquam eveniet quod deleniti impedit sapiente atque tenetur porro?</p>
                    <p>
                        <a href="#" class="pl-0 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
                    </p>
                </div>
                <div class="col-md-6 col-lg-4 text-center mb-5">
                    <img src="{{asset('assets/images/person_4.jpg')}}" alt="Image" class="img-fluid w-50 rounded-circle mb-3">
                    <h2 class="text-black font-weight-light mb-4">John Smith</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ab quas facilis obcaecati non ea, est odit repellat distinctio incidunt, quia aliquam eveniet quod deleniti impedit sapiente atque tenetur porro?</p>
                    <p>
                        <a href="#" class="pl-0 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>



@endsection
