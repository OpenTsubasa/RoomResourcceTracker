<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    //

    /**
     * Get the room that owns the resource.
     */
    public function room()
    {
        return $this->belongsTo('App\Room');
    }

    /**
     * Get the resourcetype of the resource.
     */
    public function resourcetype()
    {
        return $this->belongsTo('App\Resourcetype');
    }
}
