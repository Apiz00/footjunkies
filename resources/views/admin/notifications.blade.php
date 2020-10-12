@extends('layouts.dashboard')

@section('content')

<div class="main-panel">
    <!-- Navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top"
    >
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <a class="navbar-brand" href="javascript:;">Notifications</a>
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
          <form class="navbar-form">
            <div class="input-group no-border">
              <input
                type="text"
                value=""
                class="form-control"
                placeholder="Search..."
              />
              <button
                type="submit"
                class="btn btn-white btn-round btn-just-icon"
              >
                <i class="material-icons">search</i>
                <div class="ripple-container"></div>
              </button>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="dashboard.html">
                <i class="material-icons">dashboard</i>
                <p class="d-lg-none d-md-block">Stats</p>
              </a>
            </li>
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
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
        <div class="card">
          <div class="card-header card-header-primary">
            <h3 class="card-title">Notifications</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <!-- <div class="card"> -->

              <div class="col-md-12">
                <h4 class="card-title m-3">Customer's Messages</h4>
                <div class="card" style="overflow-y: scroll; height: 350px">
             @foreach ($notifications as $notification)
                  <div class="alert alert-success m-3">
                    <form action="{{'/admin/notifications/delete/'.$notification->id}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                    <button
                      type="submit"
                      class="close"
                    > <i class="material-icons">close</i>
                    </button>
                    </form>
                    <span>
                    <b>Name:</b>{{$notification->name}}</span
                    >
                    <span>
                    <b>Email:</b>{{$notification->email}}</span
                  >
                    <span>
                  <b>Message:</b>{{$notification->message}}</span
                >
                  </div>
                  @endforeach
                  {{-- <div class="alert alert-success m-3">
                    <button
                      type="button"
                      class="close"
                      data-dismiss="alert"
                      aria-label="Close"
                    >
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      <b> Success - </b> This is a regular notification made
                      with ".alert-success"</span
                    >
                  </div>
                  <div class="alert alert-warning m-3">
                    <button
                      type="button"
                      class="close"
                      data-dismiss="alert"
                      aria-label="Close"
                    >
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      <b> Warning - </b> This is a regular notification made
                      with ".alert-warning"</span
                    >
                  </div>
                  <div class="alert alert-danger m-3">
                    <button
                      type="button"
                      class="close"
                      data-dismiss="alert"
                      aria-label="Close"
                    >
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      <b> Danger - </b> This is a regular notification made
                      with ".alert-danger"</span
                    >
                  </div>
                  <div class="alert alert-primary m-3">
                    <button
                      type="button"
                      class="close"
                      data-dismiss="alert"
                      aria-label="Close"
                    >
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      <b> Primary - </b> This is a regular notification made
                      with ".alert-primary"</span
                    >
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="places-buttons">
              <div class="row">
                <div class="col-md-12">
                  <div class="card-body">
                    <div class="iframe-container d-none d-lg-block">
                      <iframe src="https://www.mydata-ssm.com.my/homePage">
                        <p>Your browser does not support iframes.</p>
                      </iframe>
                    </div>
                    <div
                      class="col-md-12 d-none d-sm-block d-md-block d-lg-none d-block d-sm-none text-center ml-auto mr-auto"
                    >
                      <h5>
                        The icons are visible on Desktop mode inside an
                        iframe. Since the iframe is not working on Mobile
                        and Tablets please visit the icons on their original
                        page on Google. Check the
                        <a
                          href="https://www.mydata-ssm.com.my/homePage"
                          target="_blank"
                          >Material Icons</a
                        >
                      </h5>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 ml-auto mr-auto text-center">
                  <h4 class="card-title">
                    Notifications Places
                    <p class="category">Click to view notifications</p>
                  </h4>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                  <div class="row">
                    <div class="col-md-4">
                      <button
                        class="btn btn-primary btn-block"
                        onclick="md.showNotification('top','left')"
                      >
                        Top Left
                      </button>
                    </div>
                    <div class="col-md-4">
                      <button
                        class="btn btn-primary btn-block"
                        onclick="md.showNotification('top','center')"
                      >
                        Top Center
                      </button>
                    </div>
                    <div class="col-md-4">
                      <button
                        class="btn btn-primary btn-block"
                        onclick="md.showNotification('top','right')"
                      >
                        Top Right
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                  <div class="row">
                    <div class="col-md-4">
                      <button
                        class="btn btn-primary btn-block"
                        onclick="md.showNotification('bottom','left')"
                      >
                        Bottom Left
                      </button>
                    </div>
                    <div class="col-md-4">
                      <button
                        class="btn btn-primary btn-block"
                        onclick="md.showNotification('bottom','center')"
                      >
                        Bottom Center
                      </button>
                    </div>
                    <div class="col-md-4">
                      <button
                        class="btn btn-primary btn-block"
                        onclick="md.showNotification('bottom','right')"
                      >
                        Bottom Right
                      </button>
                    </div>
                  </div>
                </div>
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
