@extends('layouts.manager')

@section('content')
<div class="main-panel">
   <!-- Navbar -->
   <nav
   class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top"
 >
   <div class="container-fluid">
     <div class="navbar-wrapper">
       <a class="navbar-brand" href="javascript:;">Staff Details</a>
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
                <form method="POST" action="{{'/manager/staff/update'}}">
                    @csrf
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Username</label>
                      <input type="text" class="form-control" name="username" value="{{auth()->user()->name}}"/>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group">
                        <label class="bmd-label-floating"
                          >Email address</label
                        >
                        <input type="email" class="form-control" name="email" value="{{auth()->user()->email}}" />
                      </div>
                    </div>
                  </div>
                  <!-- <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Fist Name</label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Last Name</label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Adress</label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                  </div> -->
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label class="bmd-label-floating">Position</label>
                      <input type="text" value="{{auth()->user()->position}}" class="form-control" name="position"/>
                      </div>
                    </div>
                    {{-- <div class="col-md-4">
                      <form action="/action_page.php">
                        <label for="myfile">Profile Image:</label>
                        <input
                          type="file"
                          id="myfile"
                          name="myfile"
                        /><br /><br />
                      </form>
                    </div> --}}
                  </div>
                  <!-- <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>About Me</label>
                        <div class="form-group">
                          <label class="bmd-label-floating">
                            Lamborghini Mercy, Your chick she so thirsty,
                            I'm in that two seat Lambo.</label
                          >
                          <textarea
                            class="form-control"
                            rows="5"
                          ></textarea>
                        </div>
                      </div>
                    </div>
                  </div> -->
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

              <div class="card-body">
              <h5 class="card-category text-gray">{{auth()->user()->email}}</h5>
                <h6 class="card-category text-gray">{{auth()->user()->position}}</h6>
                <h4 class="card-title">{{auth()->user()->name}}</h4>
                <!-- <p class="card-description">
                  Don't be scared of the truth because we need to restart
                  the human foundation in truth And I love you like Kanye
                  loves Kanye I love Rick Owens’ bed design but the back
                  is...
                </p> -->
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
  </div>@endsection
