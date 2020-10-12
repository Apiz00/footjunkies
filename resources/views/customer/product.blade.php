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
              <span> {{$product->product_name}}</span>
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

              </div>
              <div class="product__details__slider__content">
                <div class="product__details__pic__slider owl-carousel">
                  <img
                    data-hash="product-1"
                    class="product__big__img"
                    src="{{$product->image_url}}"
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
              <span style="font-size: 18px">Brand: {{$product->product_brand}}</span>
              </h3>

              <div class="product__details__price">
                RM {{$product->product_price}} <span>RM {{$product->product_price + 5}}</span>
              </div>

              <div class="product__details__button" style="margin-left: -10px">
                <form action="{{'/product/'.$product->id.'/buy/'}}" method="get">
                    @csrf
                    {{-- <div class="quantity">
                      <span>Quantity:</span>
                      <div class="pro-qty">
                        <input type="text" value="1" name="quantity"/>
                      </div>
                    </div> --}}
                    <ul>
                    <button type="submit" class="cart-btn border-none"
                      ><span class="icon_bag_alt"></span> Buy Now</button
                    >
                    <li>
                        <a href="{{ route('customer.addToCart', ['id' => $product->id])}}"><span class="icon_bag_alt"></span></a>
                      </li>
                    </ul>
                </form>




              </div>
              <div class="product__details__widget">
                <ul>
                  <li>
                    <span>Stock Availability:</span>
                    <div class="stock__checkbox">
                      <label for="stockin" style="margin-left: -20px">
                 Left {{$product->product_quantity}} Units
                        <input type="checkbox" id="stockin" />

                      </label>
                    </div>
                  </li>
                  <li>
                    <span>Available color:</span>
                    <div class="color__checkbox">
                        <label for="stockin" >
                             {{$product->product_color}}
                                   <input type="checkbox" id="stockin" />
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

              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tabs-1" role="tabpanel">

                  <p class="text-center">
                    {{$product->product_description}}
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

    <!-- Js Plugins -->


@endsection
