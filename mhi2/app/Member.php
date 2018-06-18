<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function titles()
    {
        return $this->belongsToMany('App\Title', 'member_title');
    }
}
