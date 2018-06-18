<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    public function members()
    {
        return $this->belongsToMany('App\Member', 'member_title');
    }
}
