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
                    <a href="/home"><i class="fa fa-home"></i> Home</a>
                    <span>Checkout</span>
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

        </div>
        <form action="{{ route('customer.checkout')}}" method="POST" class="checkout-form">
            {{csrf_field()}}
            {{method_field('post')}}
            <div class="row">
                <div class="col-lg-8">
                    <h5>Billing & Payment Details</h5>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <p>Name<span>*</span></p>
                                <input required type="text" name="name" value="{{auth()->user()->name}}" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <p>Email <span>*</span></p>
                                <input required type="text" name="email" value="{{auth()->user()->email}}"  />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="checkout__form__input">
                                <p>Country <span>*</span></p>
                                <input required type="text" name="country" />
                            </div>
                            <div class="checkout__form__input">
                                <p>Address <span>*</span></p>
                                <input required type="text" placeholder="Street Address" name="address" />
                                <input type="text" placeholder="Apartment. suite, unite ect ( optinal )" />
                            </div>
                            <div class="checkout__form__input">
                                <p>Town/City <span>*</span></p>
                                <input required type="text" name="city" />
                            </div>
                            <div class="checkout__form__input">
                                <p>Country/State <span>*</span></p>
                                <input required type="text" name="state" />
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <p>Card Number <span>*</span></p>
                                <input required type="text" name="phone" />
                            </div>
                            <div class="checkout__form__input">
                                <p>CVV Code <span>*</span></p>
                                <input required type="text" name="postcode" />
                            </div>
                            <div class="checkout__form__input">
                                <p>Expiry Date <span>*</span></p>
                                <input required type="date" name="date" />
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
                                @foreach ($products as $product)
                                <li> x{{$product['qty']}} {{$product['item']['product_name']}} <span>RM
                                        {{$product['item']['product_price']}}</span></li>

                                @endforeach
                            </ul>
                        </div>
                        <div class="checkout__order__total">
                            <ul>
                                <li>Subtotal <span>RM {{$total}}</span></li>
                                {{-- <li>Total <span>RM {{$total}}</span></li> --}}
                            </ul>
                        </div>

                        <button type="submit" class="site-btn">Place order</button>
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
