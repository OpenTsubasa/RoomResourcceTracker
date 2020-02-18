<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resourcetype extends Model
{
    //

    /**
     * Get the resources having the resourcetype.
     */
    public function resources()
    {
        return $this->hasMany('App\Resource');
    }

    /**
     * The rooms that have to the resourcetype.
     */
    public function rooms()
    {
        return $this->belongsToMany('App\Room', 'Resource', 'resourcetype_id', 'room_id');
    }
}
