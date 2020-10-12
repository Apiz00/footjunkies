@extends('layouts.app')

@section('content')
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

    <!-- Header Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 p-0">
            <div
              class="categories__item categories__large__item set-bg"
              data-setbg="{{URL::asset('/img/categories/main.jpg')}}"
            >
              {{-- <div class="categories__text" style="margin-top:65% ">
                <a href="/about">about us</a>
              </div> --}}
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                <div
                  class="categories__item set-bg"
                  data-setbg="img/categories/mens.jpg"
                >
                  <!-- <div class="categories__text mb-5">
                    <h4>Men’s</h4>
                    <p>358 items</p>
                    <a href="./mens.html">Shop now</a>
                  </div> -->
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                <div
                  class="categories__item set-bg"
                  data-setbg="img/categories/womens.jpg"
                >
                  <!-- <div class="categories__text pull-left mb-5">
                    <h4>Women's</h4>
                    <p>273 items</p>
                    <a href="./womens.html">Shop now</a>
                  </div> -->
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                <div
                  class="categories__item set-bg"
                  data-setbg="img/categories/kids.jpg"
                >
                  <!-- <div class="categories__text">
                    <h4>Kid's</h4>
                    <p>159 items</p>
                    <a href="./kids.html">Shop now</a>
                  </div> -->
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                <div
                  class="categories__item set-bg"
                  data-setbg="img/categories/accesories.jpg"
                >
                  <!-- <div class="categories__text">
                    <h4>Accessories</h4>
                    <p>792 items</p>
                    <a href="./accesories.html">Shop now</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Categories Section End -->
    <!-- Services Section Begin -->
    <section class="services spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="services__item">
              <i class="fa fa-car"></i>
              <h6>Free Shipping</h6>
              <p>For all orders over RM100</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="services__item">
              <i class="fa fa-money"></i>
              <h6>Money Back Guarantee</h6>
              <p>Refund for damaged goods</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="services__item">
              <i class="fa fa-support"></i>
              <h6>Payment Secure</h6>
              <p>100% secure payment</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="services__item">
              <i class="fa fa-headphones"></i>
              <h6>Online Support 24/7</h6>
              <p>Dedicated Support</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->


    <!-- Banner Section Begin -->
    <section class="banner set-bg" data-setbg="img/banner/banner-4.jpg">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 col-lg-8 m-auto">
            <div class="banner__slider owl-carousel">
              <div class="banner__item">
                <div class="banner__text">
                  <span>Nike Collection</span>
                  <h1>Nike Zoom Air 7</h1>

                </div>
              </div>
              <div class="banner__item">
                <div class="banner__text">
                  <span>JD Sports Collection</span>
                  <h1>Vans Old Skool</h1>

                </div>
              </div>
              <div class="banner__item">
                <div class="banner__text">
                  <span>Adidas Collection</span>
                  <h1>Yeezys West</h1>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Banner Section End -->


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
    <!-- Search End -->
@endsection
