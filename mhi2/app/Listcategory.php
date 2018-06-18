<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listcategory extends Model
{
    public function lists()
    {
        return $this->hasMany('App\List');
    }
}
