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
          <a href="./wishlist.html"
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
        <a href="/home"
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
              <a href="#">{{$product->product_category}}</a>
              <span>Essential structured blazer</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="product__details__pic">
              <div
                class="product__details__pic__left product__thumb nice-scroll"
              >
                <a class="pt active" href="#product-1">
                  <img src="img/product/details/thumb-1.jpg" alt="" />
                </a>
                <a class="pt" href="#product-2">
                  <img src="img/product/details/thumb-2.jpg" alt="" />
                </a>
                <a class="pt" href="#product-3">
                  <img src="img/product/details/thumb-3.jpg" alt="" />
                </a>
                <a class="pt" href="#product-4">
                  <img src="img/product/details/thumb-4.jpg" alt="" />
                </a>
              </div>
              <div class="product__details__slider__content">
                <div class="product__details__pic__slider owl-carousel">
                  <img
                    data-hash="product-1"
                    class="product__big__img"
                    src="img/product/details/product-1.jpg"
                    alt=""
                  />
                  <img
                    data-hash="product-2"
                    class="product__big__img"
                    src="img/product/details/product-3.jpg"
                    alt=""
                  />
                  <img
                    data-hash="product-3"
                    class="product__big__img"
                    src="img/product/details/product-2.jpg"
                    alt=""
                  />
                  <img
                    data-hash="product-4"
                    class="product__big__img"
                    src="img/product/details/product-4.jpg"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="product__details__text">
              <h3>
                {{$product->product_name}}
              <span>Brand: {{$product->product_brand}}</span>
              </h3>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <span>( 138 reviews )</span>
              </div>
              <div class="product__details__price">
                RM {{$product->product_price}} <span>RM {{$product->product_price + 5}}</span>
              </div>
              <p>
                {{$product->product_description}}
              </p>
              <div class="product__details__button">
                <form action="{{'/product/'.$product->id.'/buy/'}}" method="get">
                    @csrf
                    <div class="quantity">
                      <span>Quantity:</span>
                      <div class="pro-qty">
                        <input type="text" value="1" name="quantity"/>
                      </div>
                    </div>
                    <button type="submit" class="cart-btn border-none"
                      ><span class="icon_bag_alt"></span> Buy Now</button
                    >
                </form>
                <ul>
                  <li>
                    <a href="#"><span class="icon_heart_alt"></span></a>
                  </li>
                  <li>
                    <a href="{{ route('customer.addToCart', ['id' => $product->id])}}"><span class="icon_adjust-horiz"></span></a>
                  </li>
                </ul>
              </div>
              <div class="product__details__widget">
                <ul>
                  <li>
                    <span>Availability:</span>
                    <div class="stock__checkbox">
                      <label for="stockin">
                        In Stock, Left {{$product->product_quantity}} Units
                        <input type="checkbox" id="stockin" />
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  </li>
                  <li>
                    <span>Available color:</span>
                    <div class="color__checkbox">
                      <label for="red">
                        <input
                          type="radio"
                          name="color__radio"
                          id="red"
                          checked
                        />
                        <span class="checkmark"></span>
                      </label>
                      <label for="black">
                        <input type="radio" name="color__radio" id="black" />
                        <span class="checkmark black-bg"></span>
                      </label>
                      <label for="grey">
                        <input type="radio" name="color__radio" id="grey" />
                        <span class="checkmark grey-bg"></span>
                      </label>
                    </div>
                  </li>
                  <li>
                    <span>Available size:</span>
                    <div class="size__btn">
                      <label for="xs-btn" class="active">
                        <input type="radio" id="xs-btn" />
                        xs
                      </label>
                      <label for="s-btn">
                        <input type="radio" id="s-btn" />
                        s
                      </label>
                      <label for="m-btn">
                        <input type="radio" id="m-btn" />
                        m
                      </label>
                      <label for="l-btn">
                        <input type="radio" id="l-btn" />
                        l
                      </label>
                    </div>
                  </li>
                  <li>
                    <span>Promotions:</span>
                    <p>Free shipping</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="product__details__tab">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    data-toggle="tab"
                    href="#tabs-1"
                    role="tab"
                    >Description</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-toggle="tab"
                    href="#tabs-2"
                    role="tab"
                    >Specification</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-toggle="tab"
                    href="#tabs-3"
                    role="tab"
                    >Reviews ( 2 )</a
                  >
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                  <h6>Description</h6>
                  <p>
                    {{$product->product_description}}
                  </p>
                </div>
                <div class="tab-pane" id="tabs-2" role="tabpanel">
                  <h6>Specification</h6>
                  <p>
                    {{$product->product_description}}

                  </p>

                </div>
                <div class="tab-pane" id="tabs-3" role="tabpanel">
                  <h6>Reviews ( 2 )</h6>
                  <p>
                    This is a good product
                  </p>
                  <p>
                    I love it!
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Product Details Section End -->

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

    <!-- Js Plugins -->


@endsection
