<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //

    /**
     * Get the building that owns the department.
     */
    public function building()
    {
        return $this->belongsTo('App\Building');
    }

    /**
     * Get the faculty that owns the department.
     */
    public function faculty()
    {
        return $this->belongsTo('App\Faculty');
    }

    /**
     * Get the rooms within the department.
     */
    public function rooms()
    {
        return $this->hasMany('App\Room');
    }
}
