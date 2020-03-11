<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{  public $timestamps = false;
 
    public function model()
    {
        return $this->belongsTo('App\Models');
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

   


}
