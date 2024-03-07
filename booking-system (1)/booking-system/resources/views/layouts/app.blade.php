<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Siargao Homestay booking system</title>
    <meta name="description" content="Homestay booking system">
    <meta name="author" content="Cheryll Sanchez">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/custom.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('/assets/images/logo.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
</head>

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('/assets/images/loading.gif') }}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="/"><img src="{{ asset('/assets/images/header.png') }}"
                                            alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                                        <a class="nav-link" href="/">Home</a>
                                    </li>
                                    <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('about') }}">About</a>
                                    </li>
                                    <li class="nav-item {{ request()->routeIs('room') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('room') }}">Our House</a>
                                    </li>
                                    <li class="nav-item {{ request()->routeIs('available') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('available') }}">Available</a>
                                    </li>
                                    <li class="nav-item {{ request()->routeIs('gallery') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
                                    </li>
                                    <li class="nav-item {{ request()->routeIs('blog') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                                    </li>
                                    <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                                    </li>
                                    @guest

                                        <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                                            <a class="nav-link" href="{{ route('client.index') }}">Log in</a>
                                        </li>

                                    @endguest

                                    @auth
                                        <div class="dropdown">
                                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                {{ Auth::user()->first_name }}
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                </li>
                                            </ul>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    @endauth

                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('app')

    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class=" col-md-4">
                        <h3>Contact US</h3>
                        <ul class="conta">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> Siargao Island</li>
                            <li><i class="fa fa-mobile" aria-hidden="true"></i> +639123456789</li>
                            <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#">
                                    siargaohomestay@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>Menu Link</h3>
                        <ul class="link_menu">
                            <li class=" {{ request()->routeIs('home') ? 'active' : '' }}"><a
                                    href="{{ route('contact') }}"><a href="{{ route('home') }}">Home</a></li>
                            <li class=" {{ request()->routeIs('about') ? 'active' : '' }}"><a
                                    href="{{ route('contact') }}"><a href="{{ route('about') }}">About</a></li>
                            <li class=" {{ request()->routeIs('room') ? 'active' : '' }}"><a
                                    href="{{ route('contact') }}"><a href="{{ route('room') }}">Our House</a></li>
                            <li class=" {{ request()->routeIs('gallery') ? 'active' : '' }}"><a
                                    href="{{ route('contact') }}"><a href="{{ route('gallery') }}">Gallery</a></li>
                            <li class=" {{ request()->routeIs('blog') ? 'active' : '' }}"><a
                                    href="{{ route('contact') }}"><a href="{{ route('blog') }}">Blog</a></li>
                            <li class=" {{ request()->routeIs('contact') ? 'active' : '' }}"><a
                                    href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>News letter</h3>
                        {{-- <form class="bottom_form">
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form> --}}
                        <ul class="social_icon">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <p>
                                THANK YOU!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    @include('sweetalert::alert')
    @include('booking');
    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/calendar.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('/assets/js/jquery-3.0.0.min.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('/assets/js/custom.js') }}"></script>
</body>

</html>
