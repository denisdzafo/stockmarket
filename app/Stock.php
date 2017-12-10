<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public function company()
    {
      return $this->belongsTo('App\Company');
    }

    public function price()
    {
      return $this->hasMany('App\Price');
    }
}
