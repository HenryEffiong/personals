<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    public function listcategory()
{
    return $this->belongsTo('App\Listcategory');
}
}
