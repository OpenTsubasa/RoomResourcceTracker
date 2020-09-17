<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Room;
use App\Roomtype;
use App\Department;
use App\Building;

class RoomController extends Controller
{
    protected $room;

    public function __construct()
    {
        $this->room = new Room();
    }

    public function index()
    {
        $rooms = $this->room->paginate();
        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        $roomtypes = RoomType::all();
        $departments = Department::all();
        $buildings = Building::all();
        return view('rooms.create', compact('roomtypes', 'departments', 'buildings'));
    }

    public function store(Request $request)
    {
        $request->validate(
            array (
              'name' => 'required',
              'roomtype_id' => 'required',
              'department_id' => 'required',
              'building_id' => 'required',
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
            $this->room->$k = $v;
        }
        $this->room->save();
        return redirect()->route('rooms.index')->with('message', 'Item created successfully.');
    }

    public function show($id)
    {
        $room = $this->room->findOrFail($id);
        return view('rooms.show', compact('room'));
    }

    public function edit($id)
    {
        $roomtypes = RoomType::all();
        $departments = Department::all();
        $buildings = Building::all();
        $room = $this->room->findOrFail($id);
        return view('rooms.edit', compact('room', 'roomtypes', 'departments', 'buildings'));
    }

    public function update(Request $request, $id)
	{
        $request->validate(
            array (
              'name' => 'required',
              'roomtype_id' => 'required',
              'department_id' => 'required',
              'building_id' => 'required',
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

		$room = $this->room->findOrFail($id);
        foreach($inputs as $k => $v){
            if(is_array($v)){
                $v = implode(",", $v);
            }
            $room->$k = $v;
        }
        $room->save();
		return redirect()->route('rooms.index')->with('message', 'Item updated successfully.');
	}

    public function destroy($id)
	{
        $this->room->destroy($id);
		return redirect()->route('rooms.index')->with('message', 'Item deleted successfully.');
	}
}
