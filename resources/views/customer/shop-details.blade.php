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
        <a href="Login.html">Login / Register</a>
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
              <span>Men's</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Section Begin -->
    <section class="shop spad ">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3">
            <div class="shop__sidebar ">
              <div class="sidebar__categories">
                <div class="section-title">
                  <h4>Puma</h4>
                </div>
                <div class="categories__accordion">
                  <div class="accordion" id="accordionExample">
                    <div class="card">
                      <div class="card-heading active">
                        <div
                        class="product__item__pic_shop set-bg"
                        data-setbg="img/shop/shop-l4.jpeg"
                      >

                      </div>
                      <div class="card-text m-3">
                        <h5 class="text-center m-3">Email Address: <br> <p class="text-center m-3">test@gmail.com</p></h5>
                        <h5 class="text-center m-3">Address: <br> <p class="text-center m-3">275 Payne Street, Meadows Of Dan,VA, Virginia ,24120</p></h5>
                        <h5 class="text-center m-3">Description: <br> <p class="text-center m-3">Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design</p></h5>


                    </div>
                      </div>

                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="col-lg-9 col-md-9">
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/shop/shop-m1.jpeg"
                  >
                    <div class="label new">New</div>
                    <ul class="product__hover">
                      <li>
                        <a href="img/shop/shop-m1.jpeg" class="image-popup"
                          ><span class="arrow_expand"></span
                        ></a>
                      </li>
                      <li>
                        <a href="#"><span class="icon_heart_alt"></span></a>
                      </li>
                      <li>
                        <a href="#"><span class="icon_bag_alt"></span></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6><a href="#">Furry hooded parka</a></h6>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="product__price">$ 59.0</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/shop/shop-m2.jpeg"
                  >
                    <ul class="product__hover">
                      <li>
                        <a href="img/shop/shop-m2.jpeg" class="image-popup"
                          ><span class="arrow_expand"></span
                        ></a>
                      </li>
                      <li>
                        <a href="#"><span class="icon_heart_alt"></span></a>
                      </li>
                      <li>
                        <a href="#"><span class="icon_bag_alt"></span></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6><a href="#">Flowy striped skirt</a></h6>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="product__price">$ 49.0</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/shop/shop-m3.jpeg"
                  >
                    <ul class="product__hover">
                      <li>
                        <a href="img/shop/shop-m3.jpeg" class="image-popup"
                          ><span class="arrow_expand"></span
                        ></a>
                      </li>
                      <li>
                        <a href="#"><span class="icon_heart_alt"></span></a>
                      </li>
                      <li>
                        <a href="#"><span class="icon_bag_alt"></span></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6><a href="#">Croc-effect bag</a></h6>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="product__price">$ 59.0</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/shop/shop-m4.jpeg"
                  >
                    <ul class="product__hover">
                      <li>
                        <a href="img/shop/shop-m4.jpeg" class="image-popup"
                          ><span class="arrow_expand"></span
                        ></a>
                      </li>
                      <li>
                        <a href="#"><span class="icon_heart_alt"></span></a>
                      </li>
                      <li>
                        <a href="#"><span class="icon_bag_alt"></span></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6><a href="#">Dark wash Xavi jeans</a></h6>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="product__price">$ 59.0</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product__item sale">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/shop/shop-m5.jpeg"
                  >
                    <div class="label">Sale</div>
                    <ul class="product__hover">
                      <li>
                        <a href="img/shop/shop-m5.jpeg" class="image-popup"
                          ><span class="arrow_expand"></span
                        ></a>
                      </li>
                      <li>
                        <a href="#"><span class="icon_heart_alt"></span></a>
                      </li>
                      <li>
                        <a href="#"><span class="icon_bag_alt"></span></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6><a href="#">Ankle-cuff sandals</a></h6>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="product__price">$ 49.0 <span>$ 59.0</span></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/shop/shop-m6.jpeg"
                  >
                    <ul class="product__hover">
                      <li>
                        <a href="img/shop/shop-m6.jpeg" class="image-popup"
                          ><span class="arrow_expand"></span
                        ></a>
                      </li>
                      <li>
                        <a href="#"><span class="icon_heart_alt"></span></a>
                      </li>
                      <li>
                        <a href="#"><span class="icon_bag_alt"></span></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6><a href="#">Contrasting sunglasses</a></h6>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="product__price">$ 59.0</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/shop/shop-m7.jpeg"
                  >
                    <ul class="product__hover">
                      <li>
                        <a href="img/shop/shop-m7.jpeg" class="image-popup"
                          ><span class="arrow_expand"></span
                        ></a>
                      </li>
                      <li>
                        <a href="#"><span class="icon_heart_alt"></span></a>
                      </li>
                      <li>
                        <a href="#"><span class="icon_bag_alt"></span></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6><a href="#">Circular pendant earrings</a></h6>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="product__price">$ 59.0</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/shop/shop-m8.jpeg"
                  >
                    <div class="label stockout stockblue">Out Of Stock</div>
                    <ul class="product__hover">
                      <li>
                        <a href="img/shop/shop-m8.jpeg" class="image-popup"
                          ><span class="arrow_expand"></span
                        ></a>
                      </li>
                      <li>
                        <a href="#"><span class="icon_heart_alt"></span></a>
                      </li>
                      <li>
                        <a href="#"><span class="icon_bag_alt"></span></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6><a href="#">Cotton T-Shirt</a></h6>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="product__price">$ 59.0</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product__item sale">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/shop/shop-m9.jpeg"
                  >
                    <div class="label">Sale</div>
                    <ul class="product__hover">
                      <li>
                        <a href="img/shop/shop-m9.jpeg" class="image-popup"
                          ><span class="arrow_expand"></span
                        ></a>
                      </li>
                      <li>
                        <a href="#"><span class="icon_heart_alt"></span></a>
                      </li>
                      <li>
                        <a href="#"><span class="icon_bag_alt"></span></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6><a href="#">Water resistant zips backpack</a></h6>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="product__price">$ 49.0 <span>$ 59.0</span></div>
                  </div>
                </div>
              </div>
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
