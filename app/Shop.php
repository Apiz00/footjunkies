<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function staff()
    {
        return $this->hasMany('App\Staff');
    }

    public function admin()
    {
        return $this->hasMany('App\Admin');
    }
    //
}
