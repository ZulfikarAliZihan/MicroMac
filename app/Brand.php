<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model{

    public $timestamps = false;

    public function models()
    {
        return $this->hasMany('App\Models');
    }
    public function items()
    {
        return $this->hasMany('App\Item');
    }






    public function setUpdatedAt($value)
    {
      return NULL;
    }


    public function setCreatedAt($value)
    {
      return NULL;
    }


    // public function models()
    // {
    //     return $this->belongsTo('App\Models');
    // }
    // public function brands()
    // {
    //     return $this->belongsTo('App\Brand');
    // }


}
