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


    <!-- Shop Cart Section Begin -->
    <section class="shop-cart spad">
        @if(Session::has('cart'))
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="shop__cart__table">
              <table>
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th></th>
                  </tr>
                </thead>

                <tbody>
                    @foreach($products as $product)
                    <cart :product={{json_encode($product)}} inline-template>
                  <tr>
                    <td class="cart__product__item">
                      <img src="img/shop-cart/cp-1.jpg" alt="" />
                      <div class="cart__product__item__title">
                      <h6>{{$product['item']['product_name']}}</h6>
                      </div>
                    </td>
                    <td class="cart__price">RM {{$product['item']['product_price']}}</td>
                    <td class="cart__quantity">
                        <span class="badge">x{{$product['qty']}}</span>
                    </td>
                    <td class="cart__total">$ 300.0</td>
                    <td class="cart__close">
                      <span class="icon_close"></span>
                    </td>
                    <td>
                        <div class="dropdown" style="float: right">
                            <button type="button" class="btn btn-secondary btn-sm btn xs dropdown-toggle" data-toggle="dropdown">Edit <span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{route('Restaurant.increaseByOne', ['id' => $product['item']['id']])}}">+</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('Restaurant.reduceByOne', ['id' => $product['item']['id']])}}">-</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('Restaurant.remove', ['id' => $product['item']['id']])}}">Remove Order</a>
                            </div>
                        </div>
                    </td>
                  </tr>
                    </cart>
                    @endforeach
                </tbody>

              </table>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="cart__btn">
              <a href="{{url('/home')}}">Continue Shopping</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 offset-lg-2">
            <div class="cart__total__procced">
              <h6>Cart total</h6>
              <ul>
                <li>Subtotal <span> RM {{$totalPrice}}</span></li>
                <li>Total <span> RM {{$totalPrice}}</span></li>
              </ul>
              <a href="{{route('customer.checkout')}}" class="primary-btn"
                >Proceed to checkout</a
              >
            </div>
          </div>
        </div>
      </div>
      @else
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="cart__btn">
            <a href="{{url('/home')}}">Continue Shopping</a>
          </div>
        </div>
      </div>
      @endif
    </section>
    <!-- Shop Cart Section End -->

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
