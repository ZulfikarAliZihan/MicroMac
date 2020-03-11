<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Models extends Model{
    public $timestamps = false;

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    

    
    // public function brand()
    // {
    //     return $this->hasMany('App\Brand');
    // }

}
