@extends('layouts.manager')

@section('content')
<div class="main-panel">
  <!-- Navbar -->
  <nav
  class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top"
>
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <a class="navbar-brand" href="javascript:;">Create Product</a>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Edit Product</h4>
                            <p class="card-category">Complete your product</p>
                        </div>
                        <div class="card-body">
                            <form action="/manager/product/create" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Product ID
                                            </label>
                                            <input required type="text" class="form-control" name="productid"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Product Name</label>
                                            <input required type="text" class="form-control" name="product_name"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Product Brand</label>
                                            <input required type="text" class="form-control" name="product_brand"/>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Product Color</label>
                                            <input required type="text" class="form-control" name="product_color"/><br>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="color" value="#e66465" style="width: 20px;"
                                                class="form-control" />
                                        </div>
                                    </div> --}}
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Product Size</label><br>

                                            <input required type="text" class="form-control" name="product_size"/><br>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Location</label>
                                            <input required type="text" class="form-control" name="product_location"/>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Select Categories</label>
                                            <select id="categories" class="form-control" name="product_category"/>
                                            <option value="mens">Mens</option>
                                            <option value="womens">Womens</option>
                                            <option value="kids">Kids</option>
                                            <option value="accesories">Accesories</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Price (RM)</label>
                                            <input required type="number" id="quantity" name="product_price" min="1"
                                                step="any" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Quantity</label>
                                            <input required type="number" id="quantity" name="product_quantity" min="1"
                                                step="any" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                    <div class="row ">
                                        <div class="col-md-4">
                                                <label for="image">Product Image:</label>
                                                <input type="file" id="image" name="image"><br><br>
                                        </div>
                                      </div>

                                {{-- <div class="row">
                                    <div class="col-md-4">
                                        <form action="/action_page.php">
                                            <label for="myfile">Product Image 1:</label>
                                            <input type="file" id="myfile" name="myfile"><br><br>
                                        </form>
                                    </div>
                                    <div class="col-md-4">
                                        <form action="/action_page.php">
                                            <label for="myfile">Product Image 2:</label>
                                            <input type="file" id="myfile" name="myfile"><br><br>
                                        </form>
                                    </div>
                                    <div class="col-md-4">
                                        <form action="/action_page.php">
                                            <label for="myfile">Product Image 3:</label>
                                            <input type="file" id="myfile" name="myfile"><br><br>
                                        </form>
                                    </div>

                                </div> --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Lorem ipsum dolor sit amet consectetur
                                                    adipisicing elit. Saepe, nisi.</label>
                                                <textarea required class="form-control" rows="5" name="product_description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">
                                    Update Product
                                </button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- <div class="card card-profile">
             <div class="card-avatar">
               <a href="javascript:;">
                 <img class="img" src="../assets/img/faces/marc.jpg" />
               </a>
             </div>
             <div class="card-body">
               <h6 class="card-category text-gray">CEO / Co-Founder</h6>
               <h4 class="card-title">Alec Thompson</h4>
               <p class="card-description">
                 Don't be scared of the truth because we need to restart
                 the human foundation in truth And I love you like Kanye
                 loves Kanye I love Rick Owens’ bed design but the back
                 is...
               </p>
               <a href="javascript:;" class="btn btn-primary btn-round"
                 >Follow</a
               >
             </div>
           </div> -->
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
