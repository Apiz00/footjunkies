<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function receipt()
    {
        return $this->hasOne('App\Receipt');
    }
    public function payment()
    {
        return $this->hasOne('App\Payment');
    }
    //
}
