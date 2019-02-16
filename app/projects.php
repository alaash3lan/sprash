<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    //

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }
}
