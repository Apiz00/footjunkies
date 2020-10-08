<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
        'shop_name', 'shop_location', 'shop_phone_number', 'shop_ssm_reg_no', 'user_id'
    ];

    // public function staff()
    // {
    //     return $this->hasMany('App\Staff');
    // }

    // public function admin()
    // {
    //     return $this->hasMany('App\Admin');
    // }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function products() {
        return $this->hasMany('App\Product');
    }

    public function orders() {
        return $this->hasMany('App\Order');
    }
}
