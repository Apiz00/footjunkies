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
              <span>Contact</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="contact__content">
              <div class="contact__address">
                <h5>Contact info</h5>
                <ul>
                  <li>
                    <h6><i class="fa fa-map-marker"></i> Address</h6>
                    <p>
                        Persiaran Bestari, Cyber 11, 63000 Cyberjaya, Selangor
                    </p>
                  </li>
                  <li>
                    <h6><i class="fa fa-phone"></i> Phone</h6>
                    <p><span>+6017279 0071</span><span>+038312 5979</span></p>
                  </li>
                  <li>
                    <h6><i class="fa fa-headphones"></i> Support</h6>
                    <p>Footjunkies.support@gmail.com</p>
                  </li>
                </ul>
              </div>
              <div class="contact__form">
                <h5>SEND MESSAGE</h5>
                <form method="POST" action="/customer/contact">
                    {{csrf_field()}}
                    {{method_field('POST')}}
                <input type="text" placeholder="Name" value="{{auth()->user()->name}}" />
                  <input type="text" placeholder="Email" value="{{auth()->user()->email}}" />
                  <textarea name="message" placeholder="Message"></textarea>
                  <button type="submit" class="site-btn">Send Message</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="contact__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48158.305462977965!2d-74.13283844036356!3d41.02757295168286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2e440473470d7%3A0xcaf503ca2ee57958!2sSaddle%20River%2C%20NJ%2007458%2C%20USA!5e0!3m2!1sen!2sbd!4v1575917275626!5m2!1sen!2sbd"
                height="780"
                style="border: 0;"
                allowfullscreen=""
              >
              </iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section End -->

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
