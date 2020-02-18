<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //

    /**
     * Get the roomtype of the room.
     */
    public function roomtype()
    {
        return $this->belongsTo('App\Roomtype');
    }

    /**
     * Get the department that owns the room.
     */
    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    /**
     * Get the resources within the room.
     */
    public function resources()
    {
        return $this->hasMany('App\Resources');
    }

    /**
     * The resourcetypes that belong to the room.
     */
    public function resourcetypes()
    {
        return $this->belongsToMany('App\Resourcetype', 'Resource', 'room_id', 'resourcetype_id');
    }
}
