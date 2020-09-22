<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function payment()
    {
        return $this->hasOne('App\Payment');
    }
    public function cart()
    {
        return $this->hasOne('App\Cart');
    }
    //
}
