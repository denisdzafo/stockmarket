<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
  public function stock()
  {
    return $this->belongsTo('App\Stock');
  }

  public function market()
  {
    return $this->belongsTo('App\Market');
  }
}
