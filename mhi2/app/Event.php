<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function eventcategory()
    {
        return $this->belongsTo('App\Eventcategory');
    }

    public function galleries()
    {
        return $this->hasMany('App\Gallery');
    }
}
