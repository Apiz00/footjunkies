<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_id',
        'product_name',
        'product_category',
        'product_brand',
        'product_quantity',
        'product_color',
        'product_location',
        'product_price',
        'product_description',
        'shop_id'
    ];

    public function cart()
    {
        return $this->hasMany('App\Cart');
    }
    public function staff()
    {
        return $this->belongsToMany('App\Staff');
    }
    //

    public function shop() {
        return $this->belongsTo('App\Shop');
    }
}
