@extends('layouts.manager')

@section('content')

<div class="main-panel">
   <!-- Navbar -->
   <nav
   class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top"
 >
   <div class="container-fluid">
     <div class="navbar-wrapper">
       <a class="navbar-brand" href="javascript:;">Product Locater</a>
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
    <!-- Modal3 -->

    <!-- modal3 -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Product Locater</h4>
                            <p class="card-category">Search your product</p>
                        </div>
                        <div class="card-body">
                            <form class="form-inline md-form mr-auto mb-4" action="/manager/search/product" method="POST">
                                @csrf
                                <input required class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"
                                    name="search" />
                                <button type="submit" class="material-icons"
                                    style="cursor: pointer">search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div role="dialog" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Product Details</h5>
                        {{-- <button type="submit" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                    </div>
                    @if ($product)
                    <div class="modal-body">
                        <form>
                            <form>

                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Product Name</label>
                                <p>{{$product->product_name}}</p>
                                </div>


                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Product Location</label>
                                    <p>{{$product->product_location}}</p>

                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Quantity</label>
                                    <p>{{$product->product_quantity}}</p>

                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Color</label>
                                    <p>{{$product->product_color}}</p>

                                </div>
                            </form>
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">
                                                            Close
                                                        </button> --}}
                    </div>
                    @endif
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
