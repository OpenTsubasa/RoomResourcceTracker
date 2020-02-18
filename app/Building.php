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
     * The facultys that belong to the building.
     */
    public function facultys()
    {
        return $this->belongsToMany('App\Faculty', 'department', 'building_id', 'faculty_id');
    }
}
