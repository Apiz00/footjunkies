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



    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb__links">
              <a href="/home"><i class="fa fa-home"></i> Home</a>
              <span>Shopping cart</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h6 class="coupon__link">
              <span class="icon_tag_alt"></span>
              <a href="#">Have a coupon?</a> Click here to enter your code.
            </h6>
          </div>
        </div>
        <form action="{{route('createOrder', ['product' => $product, 'quantity' => $quantity])}}" class="checkout__form" method="POST">
            @csrf
          <div class="row">
            <div class="col-lg-8">
              <h5>Billing detail</h5>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="checkout__form__input">
                    <p>First Name <span>*</span></p>
                    <input type="text" name="first_name"/>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="checkout__form__input">
                    <p>Last Name <span>*</span></p>
                    <input type="text" name="last_name"/>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="checkout__form__input">
                    <p>Country <span>*</span></p>
                    <input type="text" name="country"/>
                  </div>
                  <div class="checkout__form__input">
                    <p>Address <span>*</span></p>
                    <input type="text" placeholder="Street Address" name="address"/>
                    <input
                      type="text"
                      placeholder="Apartment. suite, unite ect ( optinal )"
                    />
                  </div>
                  <div class="checkout__form__input">
                    <p>Town/City <span>*</span></p>
                    <input type="text" name="city"/>
                  </div>
                  <div class="checkout__form__input">
                    <p>Country/State <span>*</span></p>
                    <input type="text" name="state"/>
                  </div>
                  <div class="checkout__form__input">
                    <p>Postcode/Zip <span>*</span></p>
                    <input type="text" name="postcode"/>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="checkout__form__input">
                    <p>Phone <span>*</span></p>
                    <input type="text" name="phone"/>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="checkout__form__input">
                    <p>Email <span>*</span></p>
                    <input type="text" name="email"/>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="checkout__order">
                <h5>Your order</h5>
                <div class="checkout__order__product">
                  <ul>
                    <li>
                      <span class="top__text">Product</span>
                      <span class="top__text__right">Total</span>
                    </li>
                <li>{{$quantity}} - {{$product->product_name}}<span>RM {{$product->product_price}}</span></li>
                  </ul>
                </div>
                <div class="checkout__order__total">
                  <ul>
                  <li>Subtotal <span>RM {{$quantity * $product->product_price}}</span></li>
                    <li>Total <span>RM {{$quantity * $product->product_price}}</span></li>
                  </ul>
                </div>

                <button type="submit" class="site-btn">Place oder</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
    <!-- Checkout Section End -->

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
