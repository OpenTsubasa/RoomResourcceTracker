<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Roomtype;

class RoomtypeController extends Controller
{
    protected $roomtype;

    public function __construct()
    {
        $this->roomtype = new Roomtype();
    }

    public function index()
    {
        $roomtypes = $this->roomtype->paginate();
        return view('roomtypes.index', compact('roomtypes'));
    }

    public function create()
    {
        return view('roomtypes.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            array (
              'name' => 'required',
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
            $this->roomtype->$k = $v;
        }
        $this->roomtype->save();
        return redirect()->route('roomtypes.index')->with('message', 'Item created successfully.');
    }

    public function show($id)
    {
        $roomtype = $this->roomtype->findOrFail($id);
        return view('roomtypes.show', compact('roomtype'));
    }

    public function edit($id)
    {
        $roomtype = $this->roomtype->findOrFail($id);
        return view('roomtypes.edit', compact('roomtype'));
    }

    public function update(Request $request, $id)
	{
        $request->validate(
            array (
              'name' => 'required',
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

		$roomtype = $this->roomtype->findOrFail($id);
        foreach($inputs as $k => $v){
            if(is_array($v)){
                $v = implode(",", $v);
            }
            $roomtype->$k = $v;
        }
        $roomtype->save();
		return redirect()->route('roomtypes.index')->with('message', 'Item updated successfully.');
	}

    public function destroy($id)
	{
        $this->roomtype->destroy($id);
		return redirect()->route('roomtypes.index')->with('message', 'Item deleted successfully.');
	}
}
