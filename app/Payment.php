<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function order()
    {
        return $this->hasOne('App\Order');
    }
    public function invoice()
    {
        return $this->hasOne('App\Invoice');
    }
    //
}
