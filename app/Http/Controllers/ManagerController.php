<?php

namespace App\Http\Controllers;

use App\Shop;
use App\Product;
use App\Order;
use Auth;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index() {
        return view('manager.dashboard');
    }
    public function customer() {
        return view('manager.customer');
    }
    public function location() {
        return view('manager.location');
    }
    public function notifications() {
        return view('manager.notifications');
    }

    public function shop() {
        return view('manager.shop');
    }
    public function stock() {
        return view('manager.stock');
    }
    public function user() {
        return view('manager.user');
    }
    public function staff() {
        return view('manager.staff');
    }
    public function registerStore() {
        return view('manager.store.create');
    }

    public function createStore(Request $request) {
        $store = Shop::create([
            'shop_name' => $request->shopname,
            'shop_location' => $request->shoplocation,
            'shop_phone_number' => $request->shopphonenumber,
            'shop_ssm_reg_no' => $request->shopssmno,
            'user_id' => Auth::user()->id
        ]);

        return redirect('/manager');
    }

    public function updateInfo($storeid, Request $request) {
        $shop = Shop::findOrFail($storeid);
        $user = auth()->user();

        $shop->shop_name = $request->shop_name;
        $shop->shop_location = $request->shop_location;
        $shop->save();

        $user->email = $request->email;
        $user->save();

        return back();

    }

    public function product() {
        $products = Product::all()->where('shop_id', auth()->user()->shop->id);
        return view('manager.product', ['products' => $products]);
    }

    public function productcreateshow() {
        return view('manager.product.create');
    }

    public function productcreate(Request $request) {

        $store = Product::create([
            'product_id' => $request->productid,
            'product_name' => $request->product_name,
            'product_category' => $request->product_category,
            'product_brand' => $request->product_brand,
            'product_quantity' => $request->product_quantity,
            'product_color' => $request->product_color,
            'product_location' => $request->product_location,
            'product_price' => $request->product_price,
            'product_description' => $request->product_description,
            'shop_id' => auth()->user()->shop->id
        ]);

        return redirect('/manager/product');
    }

    public function productDelete($productid) {
        $product = Product::findOrFail($productid);
        $product->delete();

        return redirect('/manager/product');
    }

    public function updateQuantity(Request $request, $productid) {
        $product = Product::findOrFail($productid);
        $product->product_quantity = $request->quantity;
        $product->save();

        return back();
    }

    public function order() {
        $order = Order::all()->where('shop_id', auth()->user()->shop->id);
        return view('manager.order', ['orders' => $order]);
    }

    public function fulfillOrder(Request $request, $orderid) {
        $order = Order::findOrFail($orderid);
        $order->fulfillment_status = $request->fulfillment;
        $order->save();

        return back();
    }
}
