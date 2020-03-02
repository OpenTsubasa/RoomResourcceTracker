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
     * Get the building that owns the room.
     */
    public function building()
    {
        return $this->belongsTo('App\Building');
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

    /**
     * Get the floorplan associated with the room.
     */
    public function floorplan()
    {
        return $this->hasOne('App\Floorplan');
    }

    /**
     * Get the tours within the room.
     */
    public function tours()
    {
        return $this->hasMany('App\Tours');
    }
}
