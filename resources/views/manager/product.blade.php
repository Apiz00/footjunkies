@extends('layouts.manager')

@section('content')
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="javascript:;">Vendor Dashboard</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <form class="navbar-form">
                    <div class="input-group no-border">
                        <input type="text" value="" class="form-control" placeholder="Search..." />
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
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
                        <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">notifications</i>
                            <span class="notification">5</span>
                            <p class="d-lg-none d-md-block">Some Actions</p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Mike John responded to your email</a>
                            <a class="dropdown-item" href="#">You have 5 new tasks</a>
                            <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                            <a class="dropdown-item" href="#">Another Notification</a>
                            <a class="dropdown-item" href="#">Another One</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">person</i>
                            <p class="d-lg-none d-md-block">Account</p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                            <a class="dropdown-item" href="#">Log out</a>
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
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            New message
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                                <input type="text" class="form-control" id="recipient-name" />
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Message:</label>
                                                <textarea class="form-control" id="message-text"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
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
                        <!-- Modal2 -->
                        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            Delete This Product
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <form>
                                            <div class="confirmation">
                                                <label for="yes_no_radio">Are you sure?</label>
                                                <div class="row">
                                                    <p class="col-lg-2">
                                                        <input type="radio" name="yes_no" checked>Yes</input>
                                                    </p>
                                                    <p class="col-lg-2">
                                                        <input type="radio" name="yes_no">No</input>
                                                    </p>

                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="button" class="btn btn-primary">
                                            Confirm
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal2 -->
                        <!-- Modal3 -->
                        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            Product
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <form>

                                            <img class="img text-center pl-4 " src="../assets/img/faces/marc.jpg" />


                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
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
                                            <tr>
                                            <td>{{$product->product_id}}</td>
                                                <td>{{$product->product_name}}</td>
                                                <td>{{$product->product_category}}</td>
                                                <td>{{$product->product_color}}</td>
                                                <td>
                                                    <div class="center text-center" style="width: 250px ;">
                                                        <div class="input-group" style="display: flex;">
                                                                {{-- <form class="input-group-btn" action="{{'/manager/'.$product->id.'/update/quantity/minus'}}" method="POST" >
                                                                @csrf

                                                                    <button type="button" class="btn btn-default btn-number"
                                                                        disabled="disabled" data-type="minus"
                                                                        data-field="quant[1]" style="font-size: 0.5rem;">
                                                                        <i class="material-icons">remove</i>
                                                                    </button>
                                                                </form> --}}
                                                            <form action="{{'/manager/'.$product->id.'/update/quantity'}}" method="POST" class="">
                                                                @csrf
                                                                <input type="text" name="quantity"
                                                            class=" form-control input-number text-center" value="{{$product->product_quantity}}"
                                                                    min="1" max="10">
                                                            </form>
                                                            {{-- <form class="input-group-btn" action="{{'/manager/'.$product->id.'/update/quantity/plus'}}" method="POST" >
                                                                @csrf
                                                                <button type="button" class="btn btn-default btn-number"
                                                                    data-type="plus" data-field="quant[1]"
                                                                    style="font-size: 0.5rem;">
                                                                    <i class="material-icons"
                                                                        style="font-size: 20px !important;">add</i>
                                                                </button>
                                                            </form> --}}
                                                        </div>
                                                    </div>
                                                </td>
                                            <td class="text-primary">RM {{$product->product_price}}</td>
                                                <td class="d-flex">
                                                    <i class="material-icons" data-toggle="modal"
                                                        data-target="#exampleModal3" style="cursor: pointer">visibility</i>
                                                    <form action="{{'/manager/product/delete/'.$product->id}}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="bg-transparent border-none">
                                                            <i  class="material-icons" style="cursor: pointer">delete</i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>

                                        @endforeach
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
