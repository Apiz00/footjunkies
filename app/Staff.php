<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public function product()
    {
        return $this->belongsToMany('App\Product');
    }

    public function shop()
    {
        return $this->hasMany('App\Shop');
    }

    //
}
