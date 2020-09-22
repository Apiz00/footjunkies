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
          <a href="#"
            ><span class="icon_heart_alt"></span>
            <div class="tip">2</div>
          </a>
        </li>
        <li>
          <a href="#"
            ><span class="icon_bag_alt"></span>
            <div class="tip">2</div>
          </a>
        </li>
      </ul>
      <div class="offcanvas__logo">
        <a href="./index.html"
          ><img src="img/foot_junkies_logo-01.png" alt=""
        /></a>
      </div>
      <div id="mobile-menu-wrap"></div>
      <div class="offcanvas__auth">
        <a href="#">Login</a>
        <a href="#">Register</a>
      </div>
    </div>
    <!-- Offcanvas Menu End -->
    <div class="breadcrumb__links mt-3">
      <a href="./index.html"><i class="fa fa-home ml-3"></i> Home</a>
      <span>Login / Register Vendor</span>
    </div>
    <h3 class="text-center mt-5">Login/Register for Vendor.</h3>

    <!-- Form Section Begin -->
    <div class="login-wrap text-center mt-5">
      <div class="login-html">
        <input
          id="tab-1"
          type="radio"
          name="tab"
          class="sign-in"
          checked
        /><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up" /><label
          for="tab-2"
          class="tab"
          >Sign Up</label
        >
        <div class="login-form">
          <div class="sign-in-htm">
            <div class="group">
              <label for="user" class="label">Username</label>
              <input id="user" type="text" class="input" />
            </div>
            <div class="group">
              <label for="pass" class="label">Password</label>
              <input
                id="pass"
                type="password"
                class="input"
                data-type="password"
              />
            </div>
            <div class="group">
              <input id="check" type="checkbox" class="check" checked />
              <label for="check"
                ><span class="icon"></span> Keep me Signed in</label
              >
            </div>
            <div class="group">
              <input type="submit" class="button" value="Sign In" />
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
              <a href="#forgot">Forgot Password?</a>
            </div>
          </div>
          <div class="sign-up-htm">
            <div class="group">
              <label for="user" class="label">Username</label>
              <input id="user" type="text" class="input" />
            </div>
            <div class="group">
              <label for="pass" class="label">Password</label>
              <input
                id="pass"
                type="password"
                class="input"
                data-type="password"
              />
            </div>
            <div class="group">
              <label for="pass" class="label">Repeat Password</label>
              <input
                id="pass"
                type="password"
                class="input"
                data-type="password"
              />
            </div>
            <div class="group">
              <label for="pass" class="label">Email Address</label>
              <input id="pass" type="text" class="input" />
            </div>
            <div class="group">
              <input type="submit" class="button" value="Sign Up" />
            </div>
            <div class="hr"></div>
            <!-- <div class="foot-lnk">
                  <label for="tab-1">Already Member?</a>
                        </div> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Form Section End -->




@endsection
