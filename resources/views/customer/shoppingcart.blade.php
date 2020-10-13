@extends('layouts.app')

@section('content')

 <!-- Shop Cart Section Begin -->
 <section class="shop-cart spad">
    @if(Session::has('cart'))
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="shop__cart__table">
          <table>
            <thead>
              <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th></th>
                <th></th>
              </tr>
            </thead>

            <tbody>
                @foreach($products as $product)
                <cart :product={{json_encode($product)}} inline-template>
              <tr>
                <td class="cart__product__item">
                  <div class="cart__product__item__title">
                  <h6>{{$product['item']['product_name']}}</h6>
                  </div>
                </td>
                <td class="cart__price">RM {{$product['item']['product_price']}}</td>
                <td class="cart__quantity">
                    <span class="badge"  style="margin-left: 40px">x{{$product['qty']}}</span>
                </td>


                <td>
                    <div class="dropdown mr-5" style="float: right">
                        <button type="button" class="btn btn-secondary btn-sm btn xs dropdown-toggle" data-toggle="dropdown">Edit <span class="caret"></span></button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('Restaurant.increaseByOne', ['id' => $product['item']['id']])}}">+</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('Restaurant.reduceByOne', ['id' => $product['item']['id']])}}">-</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('Restaurant.remove', ['id' => $product['item']['id']])}}">Remove Order</a>
                        </div>
                    </div>
                </td>

              </tr>
                </cart>
                @endforeach
            </tbody>

          </table>
        </div>
      </div>
    </div>
    {{-- <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="cart__btn">
          <a href="{{url('/home')}}">Continue Shopping</a>
        </div>
      </div>
    </div> --}}
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="cart__btn">
              <a href="{{url('/home')}}">Continue Shopping</a>
            </div>
          </div>
      <div class="col-lg-4 offset-lg-2" style="margin-left: 50rem">
        <div class="cart__total__procced">
          <h6>Cart total</h6>
          <ul>
            <li>Subtotal <span> RM {{$totalPrice}}</span></li>
            <li>Total <span> RM {{$totalPrice}}</span></li>
          </ul>
          <a href="{{route('customer.checkout')}}" class="primary-btn"
            >Proceed to checkout</a
          >
        </div>
      </div>
    </div>
  </div>
  @else
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="shop__cart__table">
          <table>
            <thead>
              <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th></th>
                <th></th>
              </tr>
            </thead>

            <tbody>
                <td><h3 class="text-center">No Item</h3></td>
            </tbody>
        </table>
    </div>
  </div>
</div>
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6">
      <div class="cart__btn">
        <a href="{{url('/home')}}">Continue Shopping</a>
      </div>
    </div>
  </div>
  @endif
</section>
<!-- Shop Cart Section End -->



{{-- <div class="container">
    <div class="card">
        @if(Session::has('cart'))

        <div class="card-body">
            <ul class="list-group list-group-flush">
                @foreach($products as $product)
                <cart :product={{json_encode($product)}} inline-template>

                    <li class="list-group-item" style="background-color: rgba(255, 255, 255, 0);">
                <span class="badge">x{{$product['qty']}}</span>
                <strong>{{$product['item']['product_name']}}</strong>
                <span class="badge">RM {{$product['item']['product_price']}}</span>
                <div class="dropdown" style="float: right">
                    <button type="button" class="btn btn-secondary btn-sm btn xs dropdown-toggle" data-toggle="dropdown">Edit <span class="caret"></span></button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{route('Restaurant.increaseByOne', ['id' => $product['item']['id']])}}">+</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('Restaurant.reduceByOne', ['id' => $product['item']['id']])}}">-</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('Restaurant.remove', ['id' => $product['item']['id']])}}">Remove Order</a>
                    </div>
                </div>
            </cart>
                @endforeach
            </ul>

            <div class="card-body">
                <strong>Total : RM {{$totalPrice}}</strong>
            </div>

            <div class="card-body">
                <a href="{{route('customer.checkout')}}" type="button" class="btn btn-success btn-lg btn-block" style="margin-top: 2rem">Checkout</a>
                <a href="{{url('/home')}}" type="button" class="btn btn-secondary btn-lg btn-block" style="margin-top: 2rem">Back to menu</a>
            </div>
        </div>
        @else
        <div class="card-body">
            <h2>No item in cart</h2>
            <a href="{{url('/home')}}" type="button" class="btn btn-secondary btn-lg btn-block" style="margin-top: 2rem">Back to menu</a>
        </div>
        @endif
    </div>

</div> --}}
@endsection
