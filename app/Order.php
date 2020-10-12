<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'country',
        'address',
        'city',
        'state',
        'phone',
        'email',
        'shop_id',
        'user_id',
        'product_id',
        'price',
        'quantity'
    ];

    public function receipt()
    {
        return $this->hasOne('App\Receipt');
    }
    public function payment()
    {
        return $this->hasOne('App\Payment');
    }

    public function shop()
    {
        return $this->belongsTo('App\Shop');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    //
}
