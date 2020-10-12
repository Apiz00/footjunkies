@extends('layouts.app')
@section('content')


<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__close">+</div>
    <ul class="offcanvas__widget">
        <li><span class="icon_search search-switch"></span></li>
        <li>
            <a href="#"><span class="icon_heart_alt"></span>
                <div class="tip">2</div>
            </a>
        </li>
        <li>
            <a href="#"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a>
        </li>
    </ul>
    <div class="offcanvas__logo">
        <a href="./index.html"><img src="img/foot_junkies_logo-01.png" alt="" /></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__auth">
        <a href="#">Login</a>
        <a href="#">Register</a>
    </div>
</div>
<!-- Offcanvas Menu End -->



<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                    <span>Login / Register</span>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Form Section Begin -->
<div class="login-wrap text-center mb-5">

    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked /><label for="tab-1" class="tab">Sign
            In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up" /><label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="sign-in-htm">
                    <div class="group">
                        <label for="user" class="label">Email</label>
                        <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="password" type="password" class="input @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked />
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign In" />
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" style="color: #000
                        " href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

                    </div>
                </div>
            </form>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="sign-up-htm">
                    <div class="group">
                        <label for="user" class="label">Name</label>
                        <input id="name" type="text" class="input @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="password" type="password" class="input @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Repeat Password</label>
                        <input id="password-confirm" type="password" class="input" name="password_confirmation" required
                            autocomplete="new-password">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Email Address</label>
                        <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role:') }}</label>

                        <div class="col-md-6 mt-2 ">

                            <input type="radio" name=" role" id="role" value="2">
                            <span>Manager</span>
                            <input type="radio" name=" role" id="role" value="3">
                            <span>Customer</span>
                            @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign Up" />
                    </div>
                    {{-- <div class="hr"></div> --}}
                    <!-- <div class="foot-lnk">
              <label for="tab-1">Already Member?</a>
                    </div> -->
                </div>
            </form>
        </div>
    </div>
    </form>
</div>
<!-- Form Section End -->

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-7">
          <div class="footer__about">
            <div class="footer__logo">
              <a href="/home"
                ><img
                  src="img/foot_junkies_logo-01.png"
                  style="width: 50%;"
                  alt=""
              /></a>
            </div>
            <p>
              We brings heat to all sneaker heads in town. Providing the most desirable & finest products in footwear and accessories.
            </p>

          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-5">
          <div class="footer__widget">
            <h6>Quick links</h6>
            <ul>
              <li><a href="/about">About</a></li>
              <li><a href="/contact">Contact</a></li>

            </ul>
          </div>
        </div>

        <div class="col-lg-4 col-md-8 col-sm-8">
          <div class="footer__widget">
              <h6>Account</h6>
              <ul>
                <li><a href="/orderstracking">Orders Tracking</a></li>
                <li><a href="/checkout">Checkout</a></li>
              </ul>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="footer__copyright__text">
            <p>
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              All rights reserved
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Find Shop here.." />
        </form>
    </div>
</div>
@endsection
