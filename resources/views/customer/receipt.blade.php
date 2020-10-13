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
            <a href="./wishlist.html"><span class="icon_heart_alt"></span>
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
                    <span>Receipt</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Shop Cart Section Begin -->
<section class="shop-cart spad">
    <h2 class="text-center m-5">Receipt</h2>
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
                            <tr>
                                @foreach ($products as $product)

                                <td class="cart__product__item">

                                    <div class="cart__product__item__title">
                                        <h6>{{$product['item']['product_name']}}</h6>

                                    </div>
                                </td>
                                <td class="cart__price">RM {{$product['item']['product_price']}}</td>
                                <td class="cart__quantity pl-5">
                                    {{$product['qty']}}
                                </td>
                                <td class="cart__total">RM {{$product['qty'] * $product['item']['product_price'] }}</td>
                                {{-- <td class="cart__close">
                      <span class="icon_close"></span>
                    </td> --}}
                                @endforeach

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            {{-- <div class="col-lg-6">
            <div class="discount__content">
              <h6>Discount codes</h6>
              <form action="#">
                <input type="text" placeholder="Enter your coupon code" />
                <button type="submit" class="site-btn">Apply</button>
              </form>
            </div>
          </div> --}}
            <div class="col-lg-8 offset-lg-2">
                <div class="cart__total__procced">
                    <h6>Cart total</h6>
                    <ul>
                        <li>Subtotal <span>RM {{$total}}</span></li>
                        <li>Total <span>RM {{$total}}</span></li><br><br>
                        <h6>Customer Information</h6>
                        <li>Name <span>{{$order->name}} </span></li>
                        <li>Address <span>{{$order->address}}</span></li>

                    </ul>
                    <br>
                    <br>
                    <h6 class="text-center">Thank You for your business! <br><span>Save this receipt for any inquiries
                            may come in the future.</span></h6>
                    {{-- <a href="#" class="primary-btn m-5 w-20"
                >Confirm</a
              > --}}
                </div>
            </div>
        </div>
    </div>
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
