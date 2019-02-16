<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{


    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }
}
