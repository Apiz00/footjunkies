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
              <span>Kids</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="row">
                @foreach ($kidsproducts as $product)
                <div class="col-lg-3 col-md-6">
                  <div class="product__item">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="{{$product->image_url}}"
                    >
                      <div class="label new">New</div>
                      <ul class="product__hover">

                        <li>
                          <a href="{{ route('customer.addToCart', ['id' => $product->id])}}"><span class="icon_bag_alt"></span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product__item__text">
                        <h6 class="mb-1"><a href="{{'/product/show/'.$product->id}}">{{$product->product_name}}</a></h6>

                    <div class="product__price">RM {{$product->product_price}}</div>
                    </div>
                  </div>
                </div>
                @endforeach
              <div class="col-lg-12 text-center">
                <div class="pagination__option">
                  <a href="#">1</a>
                  <a href="#">2</a>
                  <a href="#">3</a>
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Shop Section End -->

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
