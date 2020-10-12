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
          <a href="./shop-cart.html"
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



    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb__links">
              <a href="/home"><i class="fa fa-home"></i> Home</a>
              <span>About</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Begin -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mt-5 mb-5">
          <h2 class="text-center mb-5" style="color: #CA1515">ABOUT US</h2>
          <p class="text-center mb-5">
            Footjunkies is an e-commerce platform that brings heat to all sneaker heads in town - providing the most desirable & finest products in footwear and accessories. Footjunkies remains distinctive in its brand identity & culture by distinguishing in new & classic sneakers, and limited editions collaborations. <br><br>

Launched in 2020, it is a platform tailored for the region, providing customers with an easy, secure and fast online shopping experience through strong payment and fulfillment support.
          </p>
        </div>
        <div class="row mt-5" style="margin-bottom: 30%;">
          <div class="col-lg-3 text-center">
            {{-- <i class="fa fa-desktop mb-4" style="font-size: 35px;"></i> --}}
            <h3 style="color: #CA1515">Our Purpose</h3><br>
            <p>
                We believe in the transformative power of technology and want to change the world for the better by providing a platform to connect buyers and sellers within one community.
            </p>
          </div>
          <div class="col-lg-3 text-center">
            {{-- <i class="fa fa-desktop mb-4" style="font-size: 35px;"></i> --}}
            <h3 style="color: #CA1515">Our Positioning</h3><br>
            <p>
                To Internet users across the region,Footjunkies offers a one-stop online shopping experience that provides a wide selection of products,a social community for exploration.            </p>
          </div>
          <div class="col-lg-3 text-center">
            {{-- <i class="fa fa-desktop mb-4" style="font-size: 35px;"></i> --}}
            <h3 style="color: #CA1515">We Stay Humble</h3><br>
            <p>
                Believe we are always the underdog, and seek to learn from the market and competitors.We know that we are not perfect and will always be.We work hard first, celebrate and enjoy later.
            </p>
          </div>
          <div class="col-lg-3 text-center">
            {{-- <i class="fa fa-desktop mb-4" style="font-size: 35px;"></i> --}}
            <h3 style="color: #CA1515">We Serve</h3><br>
            <p>
                To Internet users across the region,Footjunkies offers a one-stop online shopping experience that provides a wide selection of products,a social community for exploration.            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->



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
