<?php

namespace App\Http\Controllers;

use App\Shop;
use App\User;
use App\Product;
use App\tasks;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\task;

class AdminController extends Controller
{
    public function index()
    {
        $tasks = auth()->user()->tasks;
        return view('admin.dashboard', ['tasks' => $tasks]);
    }

    public function users()
    {

        return view('admin.user');
    }

    public function shops()
    {
        $shops = Shop::all();
        return view('admin.shop', ['shops' => $shops]);
    }

    public function deleteShop($shopid)
    {
        $shop = Shop::findOrFail($shopid);
        $user = $shop->user()->get()->first();
        // $order = $shop->orders();
        $products = Product::where('shop_id', $shop->id);
        // $order->delete();
        $products->delete();
        $shop->delete();
        $user->delete();
        return redirect('/admin/shops');
    }

    public function customers()
    {
        $customers = User::where('role', 3)->get();
        return view('admin.customer', ['customers' => $customers]);
    }

    public function deleteCustomer($custid)
    {
        $customer = User::findOrFail($custid);
        $customer->delete();

        return redirect('/admin/customers');
    }

    public function products()
    {
        $products = Product::all();
        return view('admin.product', ['products' => $products]);
    }

    public function deleteProduct($productid)
    {
        $product = Product::findOrFail($productid);
        $product->delete();

        return redirect('/admin/products');
    }
}
