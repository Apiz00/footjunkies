<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Shoe | Store</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}" defer></script>
    <script src="{{ asset('js/mixitup.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}" defer></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.nicescroll.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=Cookie&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />
</head>
<body>
    <div id="app">
        <header class="header" style="text-align: center;">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xl-3 col-lg-2">
                  <div class="header__logo">
                    <a href="/home"
                      ><img
                        src="img/foot_junkies_logo-01.png"
                        style="width: 25%; margin-right: 30%;"
                        alt=""
                    /></a>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-7 mt-3">
                  <nav class="header__menu">
                    <ul>
                      {{-- <li class="active"><a href="/home">Home</a></li> --}}
                      <li class="{{ Request::is( 'home') ? "active":"" }}"><a href="/home">Home</a></li>
                      <li class="{{ Request::is( 'mens') ? "active":"" }}"><a href="/mens">Men's</a></li>
                      <li class="{{ Request::is( 'womens') ? "active":"" }}"><a href="/womens">Women's</a></li>
                      <li class="{{ Request::is( 'kids') ? "active":"" }}"><a href="/kids">Kid’s</a></li>
                      <li class="{{ Request::is( 'accesories') ? "active":"" }}"><a href="/accesories">Accessories</a></li>
                      <li class="{{ Request::is( 'shop') ? "active":"" }}"><a href="/shop">Shop</a></li>
                      <li>
                        <a href="#">Tracking</a>
                        <ul class="dropdown">


                          <li class="{{ Request::is( 'orderstracking') ? "active":"" }}"><a href="/orderstracking">Orders Tracking</a></li>
                        </ul>
                      </li>
                      <li class="{{ Request::is( 'about') ? "active":"" }}"><a href="/about">About</a></li>
                      <li class="{{ Request::is( 'contact') ? "active":"" }}"><a href="/contact">Contact</a></li>
                    </ul>
                  </nav>
                </div>
                <div class="col-lg-3 mt-3">
                  <div class="header__right" style="margin-right:20px;">
                    <div class="header__right__auth">
                      <ul class="navbar-nav ml-auto ">
                          <!-- Authentication Links -->
                          @guest
                          <div class="header__right__auth">
                            <a href="/login-cust">Login / Register</a>
                          </div>


                          @else
                              <li class="nav-item dropdown">
                                  <a id="navbarDropdown" class=" dropdown-toggle header__right__auth" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      {{ Auth::user()->name }} <span class="caret"></span>
                                  </a>

                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                                      </form>
                                  </div>
                              </li>
                          @endguest
                      </ul>
                      <!-- <a href="#">Register</a> -->
                    </div>
                    <ul class="header__right__widget">

                      <li>
                        <a href="/shop-cart"
                          ><span class="icon_bag_alt"></span>

                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="canvas__open">
                <i class="fa fa-bars"></i>
              </div>
            </div>
          </header>
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
