<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    //

    /**
     * Get the departments within the faculty.
     */
    public function departments()
    {
        return $this->hasMany('App\Department');
    }

    /**
     * The buildings that belong to the faculty.
     */
    public function buildings()
    {
        return $this->belongsToMany('App\Building', 'department', 'faculty_id', 'building_id');
    }
}
