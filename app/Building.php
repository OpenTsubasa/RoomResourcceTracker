<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    //

    /**
     * Get the departments within the building.
     */
    public function departments()
    {
        return $this->hasMany('App\Department');
    }

    /**
     * Get the rooms within the building.
     */
    public function rooms()
    {
        return $this->hasMany('App\Room');
    }

    /**
     * The faculties that belong to the building.
     */
    public function faculties()
    {
        return $this->belongsToMany('App\Faculty', 'department', 'building_id', 'faculty_id');
    }
}
