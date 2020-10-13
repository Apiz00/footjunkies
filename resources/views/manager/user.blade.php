@extends('layouts.manager')

@section('content')
<div class="main-panel">
   <!-- Navbar -->
    <!-- Navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top"
    >
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <a class="navbar-brand" href="javascript:;">Shop Details</a>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          aria-controls="navigation-index"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">

          <ul class="navbar-nav">


            <li class="nav-item dropdown">
              <a
                class="nav-link"
                href="javascript:;"
                id="navbarDropdownProfile"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="material-icons">person</i>
                <p class="d-lg-none d-md-block">Account</p>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right"
                aria-labelledby="navbarDropdownProfile"
              >

                <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                                      </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Edit Profile</h4>
                            <p class="card-category">Complete your profile</p>
                        </div>
                        <div class="card-body">
                            <form action="{{'/manager/update/'.auth()->user()->shop->id}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Shop Name</label>
                                            <input type="text" class="form-control" name="shop_name"
                                                value="{{auth()->user()->shop->shop_name}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email address</label>
                                            <input type="email" class="form-control" name="email"
                                                value="{{auth()->user()->email}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Address</label>
                                            <input type="text" class="form-control" name="shop_location"
                                                value="{{auth()->user()->shop->shop_location}}" />
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-4">
                                        <form action="/action_page.php">
                                            <label for="image">Product Image:</label>
                                            <input required type="file" id="image" name="image"><br><br>
                                        </form>
                                    </div> --}}
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <div class="form-group">
                                                <label class="bmd-label-floating">
                                                    Lamborghini Mercy, Your chick she so thirsty,
                                                    I'm in that two seat Lambo.</label>
                                                <textarea class="form-control" rows="5" name="description" value="{{auth()->user()->shop->description}}"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">
                                    Update Profile
                                </button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-profile">
                        {{-- <div class="card-avatar" style="border-radius: 0px !important">
                            <a href="javascript:;">
                                <img class="img" src="../assets/img/faces/marc.jpg" />
                            </a>
                        </div> --}}
                        <div class="card-body">
                            <h5 class="card-category text-gray">{{auth()->user()->email}}</h5>
                            <h4 class="card-title">{{auth()->user()->shop->shop_name}}</h4>
                            <p class="card-description">
                                {{auth()->user()->shop->address}}
                            </p>
                            <p class="card-description">
                                {{auth()->user()->shop->description}}
                            </p>
                            <!-- <a href="javascript:;" class="btn btn-primary btn-round"
                    >Follow</a
                  > -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <footer class="footer">
      <div class="container-fluid">
        <nav class="float-left">
          <ul>
            <li>
              <a href="https://www.creative-tim.com">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="https://creative-tim.com/presentation">
                About Us
              </a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com">
                Blog
              </a>
            </li>
            <li>
              <a href="https://www.creative-tim.com/license">
                Licenses
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear());
          </script>
          , made with <i class="material-icons">favorite</i> by
          <a href="https://www.creative-tim.com" target="_blank"
            >Creative Tim</a
          >
          for a better web.
        </div>
      </div>
    </footer> -->
</div>
@endsection
