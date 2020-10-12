@extends('layouts.manager')

@section('content')
<div class="main-panel">
    <!-- Navbar -->
    <nav
    class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top"
  >
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <a class="navbar-brand" href="javascript:;">Vendor Dashboard</a>
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
              href="http://example.com"
              id="navbarDropdownMenuLink"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i class="material-icons">notifications</i>
              <span class="notification">5</span>
              <p class="d-lg-none d-md-block">Some Actions</p>
            </a>
            <div
              class="dropdown-menu dropdown-menu-right"
              aria-labelledby="navbarDropdownMenuLink"
            >
              <a class="dropdown-item" href="#"
                >Mike John responded to your email</a
              >
              <a class="dropdown-item" href="#">You have 5 new tasks</a>
              <a class="dropdown-item" href="#"
                >You're now friend with Andrew</a
              >
              <a class="dropdown-item" href="#">Another Notification</a>
              <a class="dropdown-item" href="#">Another One</a>
            </div>
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
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Products Table</h4>

            <p class="card-category">
              Here is a subtitle for this table
              <!-- <button
                type="button"
                class="btn btn-primary"
                data-toggle="modal"
                data-target="#exampleModal"
                data-whatever="@getbootstrap"
              >
                Open modal for @getbootstrap
              </button> -->
              <a href="/manager/product/create">
                <i class="pull-right material-icons" style="cursor: pointer">add_box</i></a>
            </p>
          </div>
          <!-- Modal -->
          <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">
                    New message
                  </h5>
                  <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                  >
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label"
                        >Recipient:</label
                      >
                      <input
                        type="text"
                        class="form-control"
                        id="recipient-name"
                      />
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"
                        >Message:</label
                      >
                      <textarea
                        class="form-control"
                        id="message-text"
                      ></textarea>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button
                    type="button"
                    class="btn btn-secondary"
                    data-dismiss="modal"
                  >
                    Close
                  </button>
                  <button type="button" class="btn btn-primary">
                    Add Shop
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- modal -->

<!-- Modal3 -->
<div
class="modal fade"
id="exampleModal3"
tabindex="-1"
role="dialog"
aria-labelledby="exampleModalLabel"
aria-hidden="true"
>
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">
        Product
      </h5>
      <button
        type="button"
        class="close"
        data-dismiss="modal"
        aria-label="Close"
      >
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <div class="modal-body">
      <form>

         <img class="img text-center pl-4 " src="../assets/img/faces/marc.jpg" />


      </form>
    </div>
    <div class="modal-footer">
      <button
        type="button"
        class="btn btn-secondary"
        data-dismiss="modal"
      >
        Close
      </button>

    </div>
  </div>
</div>
</div>
<!-- modal3 -->

          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Color</th>
                  <th>Stock</th>
                  <th>Price</th>

                  <th></th>
                </thead>
                <tbody>
                  @foreach ($products as $product)
                             <!-- Modal2 -->
<div
class="modal fade"
id="exampleModal2"
tabindex="-1"
role="dialog"
aria-labelledby="exampleModalLabel"
aria-hidden="true"
>
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">
        Delete This Product
      </h5>
      <button
        type="button"
        class="close"
        data-dismiss="modal"
        aria-label="Close"
      >
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <div class="modal-body">
      <form>
        <div class="confirmation">
            <label for="yes_no_radio">Are you sure?</label>

        </div>

      </form>
    </div>
    <div class="modal-footer">
      <button
        type="button"
        class="btn btn-secondary"
        data-dismiss="modal"
      >
        Close
      </button>
      <form action="{{'/manager/product/delete/'.$product->id}}" method="POST">
        @csrf
      <button type="submit" class="btn btn-primary">
        Yes
      </button>
      </form>
    </div>
  </div>
</div>
</div>
<!-- modal2 -->
                  <tr>
                  <td>{{$product->product_id}}</td>
                      <td>{{$product->product_name}}</td>
                      <td>{{$product->product_category}}</td>
                      <td>{{$product->product_color}}</td>
                      <td>
                      <div class="center text-center" style="width: 250px ;">
                      <div class="input-group">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]" style="font-size: 0.5rem;">
                              <i class="material-icons">remove</i>
                          </button>
                      </span>
                      <input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]" style="font-size: 0.5rem;">
                            <i class="material-icons" style="font-size: 20px !important;">add</i>
                          </button>
                      </span>
                  </div>
                </div>
              </td>
              <td class="text-primary">RM {{$product->product_price}}</td>
                    <td>
                      <i
                        class="material-icons"
                        data-toggle="modal"
                        data-target="#exampleModal3"
                        style="cursor: pointer"
                        >visibility</i
                      >
                      <i
                      class="material-icons"
                      data-toggle="modal"
                      data-target="#exampleModal4"
                      style="cursor: pointer"
                      >tune</i
                    >

                      <i
                        class="material-icons"
                        data-toggle="modal"
                        data-target="#exampleModal2"
                        style="cursor: pointer"
                        >delete</i>

                    </td>
                  </tr>
                  <div
 class="modal fade"
 id="exampleModal4"
 tabindex="-1"
 role="dialog"
 aria-labelledby="exampleModalLabel"
 aria-hidden="true"
>
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">
         Product
       </h5>
       <button
         type="button"
         class="close"
         data-dismiss="modal"
         aria-label="Close"
       >
         <span aria-hidden="true">&times;</span>
       </button>
     </div>

     <form action="{{'/manager/product/update/'.$product->id}}" method="POST">
         @csrf
     <div class="modal-body" style="width: 100%;">
        <div class="row">
          {{-- <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating"
                >Product ID
              </label>
              <input required type="text" name="product_id" class="form-control" />
            </div>
          </div> --}}
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating"
                >Product Name</label
              >
              <input required type="text" name="product_name" class="form-control" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating"
                >Product Brand</label
              >
              <input required type="text" name="product_brand" class="form-control" />
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label class="bmd-label-floating"
                >Product Color</label>
                <input type="text" name="product_color"  class="form-control" /><br>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <input type="color" value="#e66465"style="width: 20px;" class="form-control" />
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating"
                >Product Size</label
              ><br>

          <input type="radio" id="male" name="product_size" value="male">
          <label for="male">XS</label><br>
          <input type="radio" id="female" name="product_size" value="female">
          <label for="female">S</label><br>
          <input type="radio" id="other" name="product_size" value="other">
          <label for="other">M</label><br>
          <input type="radio" id="other" name="product_size" value="other">
          <label for="other">L</label><br>
          <input type="radio" id="other" name="product_size" value="other">
          <label for="other">XL</label>
                                      <!-- <input required type="radio" class="form-control" /> -->


            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating"
                >Location</label
              >
              <input required type="text" name="product_location" class="form-control" />
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating"
                >Select Categories</label
              >
              <select name="product_category" id="categories" class="form-control" />
                  <option  value="Mens">Mens</option>
                  <option value="Womens">Womens</option>
                  <option value="Kids">Kids</option>
                  <option value="Accesories">Accesories</option>
            </select>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Price (RM)</label>
              <input required type="number" id="quantity" name="product_price" min="1"  step="any" class="form-control" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Quantity</label>
              <input required type="number" id="quantity" name="product_quantity" min="1"  step="any" class="form-control" />
            </div>
          </div>
        </div>


        <div class="row">
          {{-- <div class="col-md-4">
                  <label for="myfile">Product Image 1:</label>
                  <input type="file" id="myfile" name="myfile"><br><br>
                </form>
          </div>
          <div class="col-md-4">
                  <label for="myfile">Product Image 2:</label>
                  <input type="file" id="myfile" name="myfile"><br><br>
                </form>
          </div>
          <div class="col-md-4">
                  <label for="myfile">Product Image 3:</label>
                  <input type="file" id="myfile" name="myfile"><br><br>
                </form>
          </div> --}}

        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Description</label>
              <div class="form-group">
                <label  class="bmd-label-floating"
                  >Lorem ipsum dolor sit amet consectetur
                  adipisicing elit. Saepe, nisi.</label
                >
                <textarea
                  class="form-control"
                  rows="5"
                  name="product_description"
                ></textarea>
              </div>
            </div>
          </div>
        </div>

        <div class="clearfix"></div>

     </div>
     <div class="modal-footer">
       <button
         type="button"
         class="btn btn-secondary"
         data-dismiss="modal"
       >
         Close
       </button>

      <button type="submit" class="btn btn-primary">
        Update Product
      </button>
      </form>

     </div>
   </div>
 </div>
</div>
                  @endforeach
                  <!-- <tr>
                    <td>2</td>
                    <td>Minerva Hooper</td>
                    <td>Curaçao</td>
                    <td>Sinaai-Waas</td>
                    <td>
                      <div class="center text-center" style="width: 250px ;">
                      <div class="input-group">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]" style="font-size: 0.5rem;">
                              <i class="material-icons">remove</i>
                          </button>
                      </span>
                      <input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]" style="font-size: 0.5rem;">
                            <i class="material-icons" style="font-size: 20px !important;">add</i>
                          </button>
                      </span>
                  </div>
                </div>
              </td>
                    <td class="text-primary">$23,789</td>
                    <td>
                      <i
                        class="material-icons"
                        data-toggle="modal"
                        data-target="#exampleModal3"
                        style="cursor: pointer"
                        >visibility</i
                      >
                      <i
                      class="material-icons"
                      data-toggle="modal"
                      data-target="#exampleModal4"
                      style="cursor: pointer"
                      >tune</i
                    >
                      <i
                        class="material-icons"
                        data-toggle="modal"
                        data-target="#exampleModal2"
                        style="cursor: pointer"
                        >delete</i
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Sage Rodriguez</td>
                    <td>Netherlands</td>
                    <td>Baileux</td>
                    <td>
                      <div class="center text-center" style="width: 250px ;">
                      <div class="input-group">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]" style="font-size: 0.5rem;">
                              <i class="material-icons">remove</i>
                          </button>
                      </span>
                      <input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]" style="font-size: 0.5rem;">
                            <i class="material-icons" style="font-size: 20px !important;">add</i>
                          </button>
                      </span>
                  </div>
                </div>
              </td>
                    <td class="text-primary">$56,142</td>
                    <td>
                      <i
                        class="material-icons"
                        data-toggle="modal"
                        data-target="#exampleModal3"
                        style="cursor: pointer"
                        >visibility</i
                      >
                      <i
                      class="material-icons"
                      data-toggle="modal"
                      data-target="#exampleModal4"
                      style="cursor: pointer"
                      >tune</i
                    >
                      <i
                        class="material-icons"
                        data-toggle="modal"
                        data-target="#exampleModal2"
                        style="cursor: pointer"
                        >delete</i
                      >

                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Philip Chaney</td>
                    <td>Korea, South</td>
                    <td>Overland Park</td>
                    <td>
                      <div class="center text-center" style="width: 250px ;">
                      <div class="input-group">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]" style="font-size: 0.5rem;">
                              <i class="material-icons">remove</i>
                          </button>
                      </span>
                      <input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]" style="font-size: 0.5rem;">
                            <i class="material-icons" style="font-size: 20px !important;">add</i>
                          </button>
                      </span>
                  </div>
                </div>
              </td>
                    <td class="text-primary">$38,735</td>
                    <td>
                      <i
                        class="material-icons"
                        data-toggle="modal"
                        data-target="#exampleModal3"
                        style="cursor: pointer"
                        >visibility</i
                      >
                      <i
                      class="material-icons"
                      data-toggle="modal"
                      data-target="#exampleModal4"
                      style="cursor: pointer"
                      >tune</i
                    >
                      <i
                        class="material-icons"
                        data-toggle="modal"
                        data-target="#exampleModal2"
                        style="cursor: pointer"
                        >delete</i
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Doris Greene</td>
                    <td>Malawi</td>
                    <td>Feldkirchen in Kärnten</td>
                    <td>
                      <div class="center text-center" style="width: 250px ;">
                      <div class="input-group">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]" style="font-size: 0.5rem;">
                              <i class="material-icons">remove</i>
                          </button>
                      </span>
                      <input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]" style="font-size: 0.5rem;">
                            <i class="material-icons" style="font-size: 20px !important;">add</i>
                          </button>
                      </span>
                  </div>
                </div>
              </td>
                    <td class="text-primary">$63,542</td>
                    <td>
                      <i
                        class="material-icons"
                        data-toggle="modal"
                        data-target="#exampleModal3"
                        style="cursor: pointer"
                        >visibility</i
                      >
                      <i
                      class="material-icons"
                      data-toggle="modal"
                      data-target="#exampleModal4"
                      style="cursor: pointer"
                      >tune</i
                    >
                      <i
                        class="material-icons"
                        data-toggle="modal"
                        data-target="#exampleModal2"
                        style="cursor: pointer"
                        >delete</i
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Mason Porter</td>
                    <td>Chile</td>
                    <td>Gloucester</td>
                    <td>
                      <div class="center text-center" style="width: 250px ;">
                      <div class="input-group">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]" style="font-size: 0.5rem;">
                              <i class="material-icons">remove</i>
                          </button>
                      </span>
                      <input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]" style="font-size: 0.5rem;">
                            <i class="material-icons" style="font-size: 20px !important;">add</i>
                          </button>
                      </span>
                  </div>
                </div>
              </td>
                    <td class="text-primary">$78,615</td>
                    <td>
                      <i
                        class="material-icons"
                        data-toggle="modal"
                        data-target="#exampleModal3"
                        style="cursor: pointer"
                        >visibility</i
                      >
                      <i
                      class="material-icons"
                      data-toggle="modal"
                      data-target="#exampleModal4"
                      style="cursor: pointer"
                      >tune</i
                    >
                      <i
                        class="material-icons"
                        data-toggle="modal"
                        data-target="#exampleModal2"
                        style="cursor: pointer"
                        >delete</i
                      >
                    </td>
                  </tr> -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

</div>
</div>
@endsection



