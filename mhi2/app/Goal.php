<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    public function strategies()
    {
        return $this->hasMany('App\Strategy');
    }


}
