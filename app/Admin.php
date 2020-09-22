<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function shop()
    {
        return $this->hasMany('App\Shop');
    }
    public function customer()
    {
        return $this->hasMany('App\Customer');
    }
    //
}
