<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    //

    /**
     * Get the room that owns the tour.
     */
    public function room()
    {
        return $this->belongsTo('App\Room');
    }

    /**
     * Get the floorplan that owns the tour.
     */
    public function floorplan()
    {
        return $this->belongsTo('App\Floorplan');
    }
}
