<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tour;
use App\Room;
use App\Floorplan;

class TourController extends Controller
{
    protected $tour;

    public function __construct()
    {
        $this->tour = new Tour();
    }

    public function index()
    {
        $tours = $this->tour->paginate();
        return view('tours.index', compact('tours'));
    }

    public function create()
    {
        $rooms = Room::all();
        $floorplans = Floorplan::all();
        return view('tours.create', compact('rooms', 'floorplans'));
    }

    public function store(Request $request)
    {
        $request->validate(
            array (
              'name' => 'required',
              'room_id' => 'required',
              'floorplan_id' => 'required',
            )
        );
        $inputs = $request->except(
            array (
              0 => 'id',
              1 => 'created_at',
              2 => 'updated_at',
              3 => '_token',
              4 => '_method',
            )
        );

        foreach($inputs as $k => $v){
            if(is_array($v)){
                $v = implode(",", $v);
            }
            $this->tour->$k = $v;
        }
        $this->tour->save();
        return redirect()->route('tours.index')->with('message', 'Item created successfully.');
    }

    public function show($id)
    {
        $tour = $this->tour->findOrFail($id);
        return view('tours.show', compact('tour'));
    }

    public function edit($id)
    {
        $rooms = Room::all();
        $floorplans = Floorplan::all();
        $tour = $this->tour->findOrFail($id);
        return view('tours.edit', compact('tour', 'rooms', 'floorplans'));
    }

    public function update(Request $request, $id)
	{
        $request->validate(
            array (
              'name' => 'required',
              'room_id' => 'required',
              'floorplan_id' => 'required',
            )
        );
        $inputs = $request->except(
            array (
              0 => 'id',
              1 => 'created_at',
              2 => 'updated_at',
              3 => '_token',
              4 => '_method',
            )
        );

		$tour = $this->tour->findOrFail($id);
        foreach($inputs as $k => $v){
            if(is_array($v)){
                $v = implode(",", $v);
            }
            $tour->$k = $v;
        }
        $tour->save();
		return redirect()->route('tours.index')->with('message', 'Item updated successfully.');
	}

    public function destroy($id)
	{
        $this->tour->destroy($id);
		return redirect()->route('tours.index')->with('message', 'Item deleted successfully.');
	}
}
