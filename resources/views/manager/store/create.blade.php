

{{--
    <div class="container">
        <h3>Register your store here</h3>
        <form action="/register/store" method="POST">
            @csrf
            <div>
                <label for="name">Shop Name: </label>
                <input type="text" name="shopname" placeholder="shopname">
            </div>
            <div>
                <label for="name">Shop Location: </label>
                <input type="text" name="shoplocation" placeholder="shoplocation">
            </div>
            <div>
                <label for="name">Shop Phone Number: </label>
                <input type="text" name="shopphonenumber" placeholder="shopphonenumber">
            </div>
            <div>
                <label for="name">Shop ssm no: </label>
                <input type="text" name="shopssmno" placeholder="shopssmno">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection --}}


@extends('layouts.withoutnav')
@section('content')


    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    {{-- <div class="offcanvas-menu-wrapper">
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
    </div> --}}
    <!-- Offcanvas Menu End -->
    <div class="breadcrumb__links mt-3">
      <a href="./index.html"><i class="fa fa-home ml-3"></i> Home</a>
      <span>Manager Enquiries</span>
    </div>
    <h3 class="text-center mt-5">Manager Enquiries</h3>
    <br>
    <h6 class="text-center">Click Sign Up Below!</h6>
    <form action="/register/store" method="POST" enctype="multipart/form-data">
        @csrf

    <!-- Form Section Begin -->
    <div class="login-wrap text-center mt-4">
      <div class="login-html">
        {{-- <input
          id="tab-1"
          type="radio"
          name="tab"
          class="sign-in"
          checked
        /><label for="tab-1" class="tab">Sign In</label> --}}

        <input id="tab-2" type="radio" name="tab" class="sign-up" /><label
          for="tab-2"
          class="tab"
          >Sign Up</label
        >
        <div class="login-form">

          <div class="sign-up-htm">
            <div class="group">
              <label for="user" class="label">Shop Name:</label>
              <input id="user" name="shopname"  type="text" class="input" />
            </div>

            <div class="group">
              <label for="pass" class="label">Address:</label>
              <input
                id="pass"
                type="text"
                name="shoplocation"
                class="input"

              />
            </div>
            <div class="group">
              <label for="pass" class="label">Phone Number</label>
              <input
                id="pass"
                type="tel"
                name="shopphonenumber"
                class="input"

              />
            </div>
            <div class="group">
              <label for="pass" class="label">SSM Register Number</label>
              <input id="pass" name="shopssmno" type="text" class="input" />
            </div>
            <div class="form-group">
                <label class="mb-2" for="image">Choose Image</label>
                <input class="mb-2" id="image" type="file" name="image" style="margin-left: 5rem">
            </div>
            <div class="group">
                <input type="submit" class="button" value="Sign Up" />
            </div>
            {{-- <div class="hr"></div> --}}
            <!-- <div class="foot-lnk">
                  <label for="tab-1">Already Member?</a>
                        </div> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Form Section End -->




@endsection

