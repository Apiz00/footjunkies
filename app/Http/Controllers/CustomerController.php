<?php

namespace App\Http\Controllers;

use App\Product;
use App\Order;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function mens()
    {
        $mensproducts = Product::all()->where('product_category', 'mens');
        return view('customer.mens', ['mensproducts' => $mensproducts]);
    }

    public function womens()
    {
        $womensproducts = Product::all()->where('product_category', 'womens');
        return view('customer.womens', ['womensproducts' => $womensproducts]);
    }

    public function kids()
    {
        $kidsproduct = Product::all()->where('product_category', 'kids');
        return view('customer.kids', ['kidsproducts' => $kidsproduct]);
    }

    public function accesories()
    {
        $accesories = Product::all()->where('product_category', 'accesories');
        return view('customer.accesories', ['accesoriesproducts' => $accesories]);
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
}
