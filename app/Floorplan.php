<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floorplan extends Model
{
    //

    /**
     * Get the room that owns the floorplan.
     */
    public function room()
    {
        return $this->belongsTo('App\Room');
    }

    /**
     * Get the tours within the floorplan.
     */
    public function tours()
    {
        return $this->hasMany('App\Tours');
    }
}
