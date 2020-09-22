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

  <!-- Header Section Begin -->
  <header class="header" style="text-align: center">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-3 col-lg-2">
          <div class="header__logo">
            <a href="./index.html"
              ><img
                src="img/foot_junkies_logo-01.png"
                style="width: 25%; margin-right: 30%"
                alt=""
            /></a>
          </div>
        </div>
        <div class="col-xl-6 col-lg-7 mt-3">
          <nav class="header__menu">
            <ul>
              <li><a href="./index.html">Home</a></li>
              <li><a href="./mens.html">Men's</a></li>
              <li><a href="./womens.html">Women's</a></li>
              <li><a href="./kids.html">Kid’s</a></li>
              <li><a href="./accesories.html">Accessories</a></li>
              <li><a href="./shop.html">Shop</a></li>
              <li>
                <a href="#">Pages</a>
                <ul class="dropdown">
                  <li>
                    <a href="./product-details.html">Product Details</a>
                  </li>
                  <li><a href="./shop-cart.html">Shop Cart</a></li>
                  <li><a href="./checkout.html">Checkout</a></li>
                  <li><a href="./blog-details.html">Orders Tracking</a></li>
                </ul>
              </li>
              <li><a href="./about.html">About</a></li>
              <li><a href="./contact.html">Contact</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-lg-3 mt-3">
          <div class="header__right">
            <div class="header__right__auth">
              <a href="Login.html">Login/Register</a>
              <!-- <a href="#">Register</a> -->
            </div>
            <ul class="header__right__widget">
              <li><span class="icon_search search-switch"></span></li>
              <li>
                <a href="./wishlist.html"
                  ><span class="icon_heart_alt"></span>
                  <div class="tip">2</div>
                </a>
              </li>
              <li>
                <a href="./shop-cart.html"
                  ><span class="icon_bag_alt"></span>
                  <div class="tip">2</div>
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
  <!-- Header Section End -->

  <!-- Breadcrumb Begin -->
  <div class="breadcrumb-option">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb__links">
            <a href="./index.html"><i class="fa fa-home"></i> Home</a>
            <span>Login / Register</span>
          </div>
          <div class="text-center mb-2 mt-5">
            <i class="fa fa-register"></i> Registration/Login for vendor?
            <a href="./Login-Ven.html"><span>Click here!</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb End -->

  <!-- Form Section Begin -->
  <div class="login-wrap text-center mb-5">
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

  <!-- Footer Section Begin -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-7">
          <div class="footer__about">
            <div class="footer__logo">
              <a href="./index.html"
                ><img
                  src="img/foot_junkies_logo-01.png"
                  style="width: 50%"
                  alt=""
              /></a>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt cilisis.
            </p>
            <div class="footer__payment">
              <a href="#"><img src="img/payment/payment-1.png" alt="" /></a>
              <a href="#"><img src="img/payment/payment-2.png" alt="" /></a>
              <a href="#"><img src="img/payment/payment-3.png" alt="" /></a>
              <a href="#"><img src="img/payment/payment-4.png" alt="" /></a>
              <a href="#"><img src="img/payment/payment-5.png" alt="" /></a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-5">
          <div class="footer__widget">
            <h6>Quick links</h6>
            <ul>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4">
          <div class="footer__widget">
            <h6>Account</h6>
            <ul>
              <li><a href="#">My Account</a></li>
              <li><a href="#">Orders Tracking</a></li>
              <li><a href="#">Checkout</a></li>
              <li><a href="#">Wishlist</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-8 col-sm-8">
          <div class="footer__newslatter">
            <h6>NEWSLETTER</h6>
            <form action="#">
              <input type="text" placeholder="Email" />
              <button type="submit" class="site-btn">Subscribe</button>
            </form>
            <div class="footer__social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-youtube-play"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-pinterest"></i></a>
            </div>
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
