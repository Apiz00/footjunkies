<?php

namespace App\Http\Controllers;

use App\Shop;
use App\Product;
use App\Order;
use Illuminate\Support\Facades\Storage;
use Auth;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index()
    {
        $tasks = auth()->user()->tasks;
        return view('manager.dashboard', ['tasks' => $tasks]);
    }
    public function customer()
    {
        return view('manager.customer');
    }
    public function location()
    {
        return view('manager.location');
    }
    public function notifications()
    {
        $product = '';
        return view('manager.search', ['product' => $product]);
    }

    public function postSearch(Request $request) {
        $product = Product::where('product_id', $request->search)->first();
        return view('manager.search', ['product' => $product]);
    }

    public function shop()
    {
        return view('manager.shop');
    }
    public function stock()
    {
        return view('manager.stock');
    }
    public function user()
    {
        return view('manager.user');
    }
    public function staff()
    {
        return view('manager.staff');
    }

    public function staffUpdate(Request $request)
    {
        $user = auth()->user();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->position = $request->position;

        $user->save();

        return back();
    }

    public function registerStore()
    {
        return view('manager.store.create');
    }

    public function createStore(Request $request)
    {
        $validated = $request->validate([
            'shopname' => 'string|max:40',
            'image' => 'mimes:jpeg,png|max:1014',
        ]);
        $extension = $request->image->extension();
        $request->image->storeAs('/public', $validated['shopname'].".".$extension);
        $url = Storage::url($validated['shopname'].".".$extension);

        $store = new Shop;
        $store->shop_name = $request->shopname;
        $store->shop_location = $request->shoplocation;
        $store->shop_phone_number = $request->shopphonenumber;
        $store->shop_ssm_reg_no = $request->shopssmno;
        $store->image_url = $url;
        $store->user_id = Auth::user()->id;
        $store->save();

        return redirect('/manager');
    }

    public function updateInfo($storeid, Request $request)
    {
        $shop = Shop::findOrFail($storeid);
        $user = auth()->user();

        $shop->shop_name = $request->shop_name;
        $shop->shop_location = $request->shop_location;
        $shop->description = $request->description;
        $shop->save();

        $user->email = $request->email;
        $user->save();

        return back();
    }

    public function product()
    {
        $products = Product::all()->where('shop_id', auth()->user()->shop->id);
        return view('manager.product', ['products' => $products]);
    }

    public function productcreateshow()
    {
        return view('manager.product.create');
    }

    public function productcreate(Request $request)
    {
        $validated = $request->validate([
            'product_name' => 'string|max:40',
            'image' => 'mimes:jpeg,png|max:1014',
        ]);
        $extension = $request->image->extension();
        $request->image->storeAs('/public', str_replace(' ','', $validated['product_name']).".".$extension);
        $url = Storage::url(str_replace(' ','', $validated['product_name']).".".$extension);

        $product = new Product;

        $product->product_id = $request->productid;
        $product->product_name = $request->product_name;
        $product->product_category = $request->product_category;
        $product->product_brand = $request->product_brand;
        $product->product_quantity = $request->product_quantity;
        $product->product_color = $request->product_color;
        $product->product_location = $request->product_location;
        $product->product_price = $request->product_price;
        $product->product_size = $request->product_size;
        $product->image_url = $url;
        $product->product_description = $request->product_description;
        $product->shop_id = auth()->user()->shop->id;
        $product->save();

        return redirect('/manager/product');
    }

    public function productDelete($productid)
    {
        $product = Product::findOrFail($productid);
        $product->delete();

        return redirect('/manager/product');
    }

    public function updateQuantity(Request $request, $productid)
    {
        $product = Product::findOrFail($productid);
        $product->product_quantity = $request->quantity;
        $product->save();

        return back();
    }

    public function decrementQty($productid) {
        $product = Product::findOrFail($productid);
        $product->product_quantity = $product->product_quantity - 1;
        $product->save();

        return back();
    }

    public function incrementQty($productid) {
        $product = Product::findOrFail($productid);
        $product->product_quantity = $product->product_quantity + 1;
        $product->save();

        return back();
    }

    public function order()
    {
        $order = Order::all()->where('shop_id', auth()->user()->shop->id);
        return view('manager.order', ['orders' => $order]);
    }

    public function fulfillOrder(Request $request, $orderid)
    {
        $order = Order::findOrFail($orderid);
        $order->fulfillment_status = $request->fulfillment;
        $order->save();

        return back();
    }
}
