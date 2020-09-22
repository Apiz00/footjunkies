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

    <!-- Header Section Begin -->
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
                <li><a href="/home">Home</a></li>
                <li><a href="/mens">Men's</a></li>
                <li><a href="/womens">Women's</a></li>
                <li><a href="/kids">Kid’s</a></li>
                <li><a href="/accesories">Accessories</a></li>
                <li><a href="/shop">Shop</a></li>
                <li>
                  <a href="#">Pages</a>
                  <ul class="dropdown">
                    <li>
                      <a href="/product">Product Details</a>
                    </li>
                    <li><a href="/shop-cart">Shop Cart</a></li>
                    <li><a href="/checkout">Checkout</a></li>
                    <li><a href="/orderstracking">Orders Tracking</a></li>
                  </ul>
                </li>
                <li class="active"><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-lg-3 mt-3">
            <div class="header__right">
              <div class="header__right__auth">
                <a href="/login">Login / Register</a>
              </div>
              <ul class="header__right__widget">
                <li><span class="icon_search search-switch"></span></li>
                <li>
                  <a href="/wishlist"
                    ><span class="icon_heart_alt"></span>
                    <div class="tip">2</div>
                  </a>
                </li>
                <li>
                  <a href="/shop-cart"
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
          <h2 class="text-center mb-5">ABOUT US</h2>
          <p class="text-center mb-5">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Exercitationem magnam nostrum voluptate repellat veniam minus nihil
            voluptatum eaque fugit, perspiciatis perferendis amet? Dolorum iusto
            perferendis veritatis similique. Perferendis, perspiciatis magnam.
          </p>
        </div>
        <div class="row mt-5" style="margin-bottom: 30%;">
          <div class="col-lg-3 text-center">
            <i class="fa fa-desktop mb-4" style="font-size: 35px;"></i>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur,
              alias?
            </p>
          </div>
          <div class="col-lg-3 text-center">
            <i class="fa fa-desktop mb-4" style="font-size: 35px;"></i>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur,
              alias?
            </p>
          </div>
          <div class="col-lg-3 text-center">
            <i class="fa fa-desktop mb-4" style="font-size: 35px;"></i>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur,
              alias?
            </p>
          </div>
          <div class="col-lg-3 text-center">
            <i class="fa fa-desktop mb-4" style="font-size: 35px;"></i>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur,
              alias?
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Blog Section Begin -->
    <!-- <section class="blog spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="blog__item">
              <div
                class="blog__item__pic large__item set-bg"
                data-setbg="img/blog/blog-1.jpg"
              ></div>
              <div class="blog__item__text">
                <h6>
                  <a href="#"
                    >No Bad Blood! The Reason Why Tamr Judge Finally Made Up
                    With...</a
                  >
                </h6>
                <ul>
                  <li>by <span>Ema Timahe</span></li>
                  <li>Seb 17, 2019</li>
                </ul>
              </div>
            </div>
            <div class="blog__item">
              <div
                class="blog__item__pic set-bg"
                data-setbg="img/blog/blog-7.jpg"
              ></div>
              <div class="blog__item__text">
                <h6>
                  <a href="#"
                    >Pot Party! See Farrah Abraham Flaunt Smoking Body At...</a
                  >
                </h6>
                <ul>
                  <li>by <span>Ema Timahe</span></li>
                  <li>Seb 17, 2019</li>
                </ul>
              </div>
            </div>
            <div class="blog__item">
              <div
                class="blog__item__pic set-bg"
                data-setbg="img/blog/blog-9.jpg"
              ></div>
              <div class="blog__item__text">
                <h6>
                  <a href="#"
                    >CMT Awards 2019 Red Carpet Arrivals Carrie Underwood,
                    Sheryl...</a
                  >
                </h6>
                <ul>
                  <li>by <span>Ema Timahe</span></li>
                  <li>Seb 17, 2019</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="blog__item">
              <div
                class="blog__item__pic set-bg"
                data-setbg="img/blog/blog-2.jpg"
              ></div>
              <div class="blog__item__text">
                <h6>
                  <a href="#"
                    >Amf Cannes Red Carpet Celebrities Kendall Jenner,
                    Pamela...</a
                  >
                </h6>
                <ul>
                  <li>by <span>Ema Timahe</span></li>
                  <li>Seb 17, 2019</li>
                </ul>
              </div>
            </div>
            <div class="blog__item">
              <div
                class="blog__item__pic set-bg"
                data-setbg="img/blog/blog-4.jpg"
              ></div>
              <div class="blog__item__text">
                <h6>
                  <a href="#"
                    >Ireland Baldwin Shows Off Trendy Ilse Valfre Tattoo At
                    Stagecoach...</a
                  >
                </h6>
                <ul>
                  <li>by <span>Ema Timahe</span></li>
                  <li>Seb 17, 2019</li>
                </ul>
              </div>
            </div>
            <div class="blog__item">
              <div
                class="blog__item__pic set-bg"
                data-setbg="img/blog/blog-8.jpg"
              ></div>
              <div class="blog__item__text">
                <h6>
                  <a href="#"
                    >Kim Kardashian Steps Out In Paris Wearing Shocking
                    Sparkly...</a
                  >
                </h6>
                <ul>
                  <li>by <span>Ema Timahe</span></li>
                  <li>Seb 17, 2019</li>
                </ul>
              </div>
            </div>
            <div class="blog__item">
              <div
                class="blog__item__pic set-bg"
                data-setbg="img/blog/blog-10.jpg"
              ></div>
              <div class="blog__item__text">
                <h6>
                  <a href="#"
                    >A-list Battle! Angelina Jolie & Lady Gaga Fighting Over
                    Who...</a
                  >
                </h6>
                <ul>
                  <li>by <span>Ema Timahe</span></li>
                  <li>Seb 17, 2019</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="blog__item">
              <div
                class="blog__item__pic set-bg"
                data-setbg="img/blog/blog-3.jpg"
              ></div>
              <div class="blog__item__text">
                <h6>
                  <a href="#"
                    >Gigi Hadid, Rita Ora, Serena & Other Hot Celebs Stun At
                    2019...</a
                  >
                </h6>
                <ul>
                  <li>by <span>Ema Timahe</span></li>
                  <li>Seb 17, 2019</li>
                </ul>
              </div>
            </div>
            <div class="blog__item">
              <div
                class="blog__item__pic set-bg"
                data-setbg="img/blog/blog-5.jpg"
              ></div>
              <div class="blog__item__text">
                <h6>
                  <a href="#"
                    >Billboard Music Awards: Best, Worst & Wackiest Dresses On
                    The...</a
                  >
                </h6>
                <ul>
                  <li>by <span>Ema Timahe</span></li>
                  <li>Seb 17, 2019</li>
                </ul>
              </div>
            </div>
            <div class="blog__item">
              <div
                class="blog__item__pic large__item set-bg"
                data-setbg="img/blog/blog-6.jpg"
              ></div>
              <div class="blog__item__text">
                <h6>
                  <a href="#"
                    >Stephanie Pratt Busts Out Of Teeny Black Bikini During
                    Hawaii...</a
                  >
                </h6>
                <ul>
                  <li>by <span>Ema Timahe</span></li>
                  <li>Seb 17, 2019</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-12 text-center">
            <a href="#" class="primary-btn load-btn">Load more posts</a>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Blog Section End -->

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
    <!-- Search End -->



@endsection
