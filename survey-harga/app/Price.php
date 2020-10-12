<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public function price_has_stuff()
    {
        return $this->belongsTo('App\Stuff', 'stuff_id');
    }
}
