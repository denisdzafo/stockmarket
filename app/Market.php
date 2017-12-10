<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    public function price()
    {
      return $this->hasMany('App\Price');
    }
}
