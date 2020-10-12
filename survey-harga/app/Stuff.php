<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stuff extends Model
{
    public function stuff_has_price()
    {
        return $this->hasMany('App\Price');
    }
}
