<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facilities extends Model
{
    //
    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function supports()
    {
        return $this->hasMany('App\Support');
    }

}
