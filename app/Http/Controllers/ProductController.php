<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productcreate(Request $request)
    {

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
    public function update(Request $request, Product $product)
    {
        $product->product_name = $request->product_name;
        $product->product_category = $request->product_category;
        $product->product_brand =  $request->product_brand;
        $product->product_quantity =  $request->product_quantity;
        $product->product_color =  $request->product_color;
        $product->product_location =  $request->product_location;
        $product->product_price =  $request->product_price;
        $product->product_description =  $request->product_description;
        $product->save();

        return back();
    }
}
