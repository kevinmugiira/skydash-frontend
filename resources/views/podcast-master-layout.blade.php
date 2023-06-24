<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vekpod</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900">
    <link rel="stylesheet" href="{{asset('assets/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>
<body>
{{--<header class="site-navbar py-4" role="banner">--}}

{{--    <div class="container">--}}
{{--        <div class="row align-items-center">--}}


{{--            <div class="col-3">--}}
{{--                <h1 class="site-logo"><a href="{{url('home')}}" class="h2">Vekpod<span class="text-primary">.</span> </a></h1>--}}
{{--            </div>--}}
{{--            <div class="col-9">--}}
{{--                <nav class="site-navigation position-relative text-right text-md-right" role="navigation">--}}



{{--                    <div class="d-block d-lg-none ml-md-0 mr-auto"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>--}}

{{--                    <ul class="site-menu js-clone-nav d-none d-lg-block">--}}
{{--                        <li>--}}
{{--                            <a href="{{url('home')}}">Home</a>--}}
{{--                        </li>--}}
{{--                        <li class="has-children">--}}
{{--                            <a href="#">Dropdown</a>--}}
{{--                            <ul class="dropdown arrow-top">--}}
{{--                                <li><a href="#">Menu One</a></li>--}}
{{--                                <li><a href="#">Menu Two</a></li>--}}
{{--                                <li><a href="#">Menu Three</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="active"><a href="{{url('about')}}">About</a></li>--}}
{{--                        <li><a href="{{url('contact')}}">Contact</a></li>--}}
{{--                        <li><a href="login-register.html">Login / Register</a></li>--}}
{{--                    </ul>--}}
{{--                </nav>--}}


{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}

{{--</header>--}}

@yield('cont')

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h3>About Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi, odio beatae aspernatur natus recusandae quasi magni eum voluptatem nam!</p>
            </div>
            <div class="col-lg-3 mx-auto">
                <h3>Navigation</h3>
                <ul class="list-unstyled">
                    <li><a href="#">Podcasts</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h3>Subscribe</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quibusdam!</p>
                <form action="#" class="form-subscribe">
                    <input type="email" class="form-control mb-3" placeholder="Enter Email">
                    <input type="submit" class="btn btn-primary" value="Subscribe">
                </form>
            </div>
        </div>

        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>

        </div>
    </div>
</footer>

<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/aos.js')}}"></script>

<script src="{{asset('assets/js/mediaelement-and-player.min.js')}}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

        for (var i = 0; i < total; i++) {
            new MediaElementPlayer(mediaElements[i], {
                pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                shimScriptAccess: 'always',
                success: function () {
                    var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                    for (var j = 0; j < targetTotal; j++) {
                        target[j].style.visibility = 'visible';
                    }
                }
            });
        }
    });
</script>


<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
