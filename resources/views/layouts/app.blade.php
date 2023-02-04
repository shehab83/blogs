<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700itali" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/misc.css') }}">
    <link rel="stylesheet" href="{{ asset('css/orange-scheme.css') }}">

    <!-- JavaScripts -->
    <link rel="stylesheet" href="{{ asset('js/jquery-1.10.2.min.js') }}">
    <link rel="stylesheet" href="{{ asset('js/jquery-migrate-1.2.1.min.js') }}">

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    @yield('css')
    <link rel="preconnect" href="https://fonts.googleapis.com">




</head>

<body>


    <header class="site-header clearfix">
        <div class="container">
            <div class="row">

                <div class="col-md-12">

                    <div class="pull-left logo">
                        <a href="/">
                            <img src="images/logo.png" alt="Medigo by templatemo">
                        </a>
                    </div> <!-- /.logo -->

                    <div class="main-navigation pull-right">

                        <nav class="main-nav visible-md visible-lg">
                            <ul class="sf-menu">
                                <li class="active"><a href="/">Home</a></li>
                                <li class="nav-item"> <a class="nav-link" href="/blog">Blog</a></li>
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul> <!-- /.sf-menu -->
                        </nav> <!-- /.main-nav -->


                        <!-- This one in here is responsive menu for tablet and mobiles -->
                        <div class="responsive-navigation visible-sm visible-xs">
                            <a href="#nogo" class="menu-toggle-btn">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div> <!-- /responsive_navigation -->

                    </div> <!-- /.main-navigation -->

                </div> <!-- /.col-md-12 -->

            </div> <!-- /.row -->

        </div> <!-- /.container -->
    </header> <!-- /.site-header -->
    <main class="parallax first-widget">
        @yield('content')
    </main>


    @include('layouts.footer')


    <!-- Scripts -->
    <script src="{{ asset('js/min/plugins.min.js') }}"></script>
    <script src="{{ asset('js/min/medigo-custom.min.js') }}"></script>
</body>

</html>
