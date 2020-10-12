<?php

namespace App\Http\Controllers;

use App\Product;
use App\Order;
use App\User;
use App\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{

    public function mens()
    {
        $mensproducts = Product::where('product_category', 'mens')->get();
        return view('customer.mens', ['mensproducts' => $mensproducts]);
    }

    public function womens()
    {
        $womensproducts = Product::where('product_category', 'womens')->get();
        return view('customer.womens', ['womensproducts' => $womensproducts]);
    }

    public function kids()
    {
        $kidsproduct = Product::where('product_category', 'kids')->get();
        return view('customer.kids', ['kidsproducts' => $kidsproduct]);
    }

    public function accesories()
    {
        $accesories = Product::where('product_category', 'accesories')->get();
        return view('customer.accesories', ['accesoriesproducts' => $accesories]);
    }

    public function shops()
    {
        $shops = Shop::all();
        return view('customer.shop', ['shops' => $shops]);
    }

    public function shop($shopid) {
        $shop = Shop::findOrFail($shopid);
        $products = Product::where('shop_id', $shop->id)->get();
        return view('customer.shop-details', ['shop' => $shop, 'products' => $products]);
    }

    public function searchShop(Request $request) {
        $shops = Shop::query()->where('shop_name', 'LIKE', '%' . $request->searchshop . '%')->get();

        return view('customer.shop', ['shops' => $shops]);
    }

    public function showProduct($productid)
    {
        $product = Product::findOrFail($productid);
        return view('customer.product', ['product' => $product]);
    }

    public function buyProduct(Request $request, $productid)
    {
        $product = Product::findOrFail($productid);
        $quantity = $request->quantity;
        return view('customer.checkout', ['product' => $product, 'quantity' => $quantity]);
    }

    public function checkout() {
        return view('customer.checkout');
    }

    public function createOrder(Request $request, $product, $quantity)
    {
        $product = Product::findOrFail($product);
        $product->product_quantity = $product->product_quantity - $quantity;
        $order = Order::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'country' => $request->country,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'phone' => $request->phone,
            'email' => $request->email,
            'shop_id' => $product->shop->id,
            'user_id' => auth()->user()->id,
            'product_id' => $product->id,
            'price' => $product->product_price * $quantity,
            'quantity' => $request->quantity
        ]);

        return view('customer.receipt', ['order' => $order, 'product' => $product, 'quantity' => $quantity]);
    }
    public function showUserMessage(Request $request)
    {
        $user = Auth::User();
        $user = User::findOrFail(auth()->id());
        $user->message = $request->message;
        $user->save;
        return view('customer.contact', ['user' => $user]);
    }
    // public function storeUserMessage(Request $request)
    // {
    //     $user = Auth::User();
    //     $user->message = $request->message;
    //     $user->();
    //     return back();
    // }
}
