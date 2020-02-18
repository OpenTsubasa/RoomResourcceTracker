<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roomtype extends Model
{
    //

    /**
     * Get the rooms having the roomtype.
     */
    public function rooms()
    {
        return $this->hasMany('App\Room');
    }
}
