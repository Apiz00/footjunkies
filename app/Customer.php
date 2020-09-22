<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function admin()
    {
        return $this->hasMany('App\Admin');
    }
    public function cart()
    {
        return $this->hasOne('App\Cart');
    }
    //
}
