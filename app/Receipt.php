<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    public function order()
    {
        return $this->hasOne('App\Order');
    }

    //
}
