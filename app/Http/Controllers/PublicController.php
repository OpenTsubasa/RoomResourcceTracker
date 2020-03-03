<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;
use App\Faculty;
use App\Department;
use App\Roomtype;
use App\Room;
use App\Resourcetype;
use App\Resource;
use App\Floorplan;
use App\Tour;

class PublicController extends Controller
{
    public function buildings()
    {
        $buildings = Building::all();
        return view('public.buildings', compact('buildings'));
    }

    public function faculties()
    {
        $faculties = Faculty::all();
        return view('public.faculties', compact('faculties'));
    }

    public function departments()
    {
        $departments = Department::all();
        return view('public.departments', compact('departments'));
    }

    public function roomtypes()
    {
        $roomtypes = Roomtype::all();
        return view('public.roomtypes', compact('roomtypes'));
    }

    public function rooms()
    {
        $rooms = Room::all();
        return view('public.rooms', compact('rooms'));
    }

    public function resourcetypes()
    {
        $resourcetypes = Resourcetype::all();
        return view('public.resourcetypes', compact('resourcetypes'));
    }

    public function resources()
    {
        $resources = Resource::all();
        return view('public.resources', compact('resources'));
    }

    public function floorplans()
    {
        $floorplans = Floorplan::all();
        return view('public.floorplans', compact('floorplans'));
    }

    public function tours()
    {
        $tours = Tour::all();
        return view('public.tours', compact('tours'));
    }
}
