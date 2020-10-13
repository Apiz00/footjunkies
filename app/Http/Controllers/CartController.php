<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\User;
use App\Order;
use App\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('customer.wishlist');
    }
    public function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        // dd($cart);
        $request->session()->put('cart', $cart);
        return redirect('/shop-cart');
    }

    public function getReduceByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect('/shop-cart');
    }

    public function getIncreaseByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->increaseByOne($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect('/shop-cart');
    }

    public function getRemoveItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect('/shop-cart');
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('customer.shoppingcart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        // dd($cart->items);

        $totalPrice = 0;

        foreach ($cart->items as $item) {
            $totalPriceOne = $item['qty'] * $item['item']->product_price;
            $totalPrice = $totalPriceOne + $totalPrice;


        }

        $cart->totalPrice = $totalPrice;
        return view('customer.shoppingcart', ['products' => $cart->items, 'totalPrice' => $totalPrice]);
    }

    public function getCheckout()
    {
        if (!Session::has('cart')) {
            return view('customer.checkout');
        }
        $user = auth()->user();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $totalPrice = 0;
        foreach ($cart->items as $item) {
            $totalPriceOne = $item['qty'] * $item['item']->product_price;
            $totalPrice = $totalPriceOne + $totalPrice;


        }
        // dd($totalPrice);
        // $cart->items->totalPrice = $totalPrice;
        return view('customer.checkout', ['products' => $cart->items, 'total' => $totalPrice, 'user' => $user]);
    }

    public function postCheckout(Request $request, User $id)
    {
        if (!Session::has('cart')) {
            return view('customer.shoppingcart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $order = new Order();
        $order->cart = json_encode($cart);
        $order->address = $request->input('address');
        $order->name = $request->input('name');
        $shopid = current($cart->items)['item']['shop_id'];
        $totalPrice = 0;
        foreach ($cart->items as $item) {
        $totalPriceOne = $item['qty'] * $item['item']->product_price;
            $totalPrice = $totalPriceOne + $totalPrice;
            $product = Product::findOrFail($item['item']->id);
            $product->product_quantity = $product->product_quantity - $item['qty'];
            $product->save();
        }
        $order->total_price = $totalPrice;
        $order->user_id = auth()->user()->id;
        $order->shop_id = $shopid;
        // $order->user_id = Auth::user()->id;
        $order->save();
        // Auth::user()->orders()->save($order);
        // Auth::user()->orders()->save($order);
        // dd(Auth::user()->orders());

        return redirect('/invoice');
    }

    public function receipt() {

        if (!Session::has('cart')) {
            return view('customer.checkout');
        }
        $user = auth()->user();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $totalPrice = 0;
        foreach ($cart->items as $item) {
            $totalPriceOne = $item['qty'] * $item['item']->product_price;
            $totalPrice = $totalPriceOne + $totalPrice;
        }
        $order = Order::latest()->first();
        // dd($totalPrice);
        // $cart->items->totalPrice = $totalPrice;
        Session::forget('cart');
        return view('customer.receipt', ['products' => $cart->items, 'total' => $totalPrice, 'user' => $user, 'order' => $order]);

    }

    public function invoice(Request $request) {

        if (!Session::has('cart')) {
            return view('customer.checkout');
        }
        $user = auth()->user();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $order = new Order();
        $order->cart = json_encode($cart);
        $order->address = $request->input('address');
        $order->name = $request->input('name');
        $shopid = current($cart->items)['item']['shop_id'];
        $totalPrice = 0;
        foreach ($cart->items as $item) {
            $totalPriceOne = $item['qty'] * $item['item']->product_price;
            $totalPrice = $totalPriceOne + $totalPrice;
            $product = Product::findOrFail($item['item']->id);
            $product->product_quantity = $product->product_quantity - $item['qty'];
            $product->save();
        }
        $order->total_price = $totalPrice;
        $order->user_id = auth()->user()->id;
        $order->shop_id = $shopid;
        // $order->user_id = Auth::user()->id;
        $order->save();
        $order = Order::latest()->first();
        // dd($totalPrice);
        // $cart->items->totalPrice = $totalPrice;
        return view('customer.invoice', ['products' => $cart->items, 'total' => $totalPrice, 'user' => $user, 'order' => $order]);
    }
}
