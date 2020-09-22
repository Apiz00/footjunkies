<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function cart()
    {
        return $this->hasMany('App\Cart');
    }
    public function staff()
    {
        return $this->belongsToMany('App\Staff');
    }
    //
}
