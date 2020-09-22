<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function customer()
    {
        return $this->hasOne('App\Customer');
    }
    public function invoice()
    {
        return $this->hasOne('App\Invoice');
    }
    public function product()
    {
        return $this->hasMany('App\Product');
    }
    //
}
