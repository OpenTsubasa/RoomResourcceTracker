<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Floorplan;

class FloorplanController extends Controller
{
    protected $floorplan;

    public function __construct()
    {
        $this->floorplan = new Floorplan();
    }

    public function index()
    {
        $floorplans = $this->floorplan->paginate();
        return view('floorplans.index', compact('floorplans'));
    }

    public function create()
    {
        return view('floorplans.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            array (
              'name' => 'required',
              'room_id' => 'required',
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
            $this->floorplan->$k = $v;
        }
        $this->floorplan->save();
        return redirect()->route('floorplans.index')->with('message', 'Item created successfully.');
    }

    public function show($id)
    {
        $floorplan = $this->floorplan->findOrFail($id);
        return view('floorplans.show', compact('floorplan'));
    }

    public function edit($id)
    {
        $floorplan = $this->floorplan->findOrFail($id);
        return view('floorplans.edit', compact('floorplan'));
    }

    public function update(Request $request, $id)
	{
        $request->validate(
            array (
              'name' => 'required',
              'room_id' => 'required',
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

		$floorplan = $this->floorplan->findOrFail($id);
        foreach($inputs as $k => $v){
            if(is_array($v)){
                $v = implode(",", $v);
            }
            $floorplan->$k = $v;
        }
        $floorplan->save();
		return redirect()->route('floorplans.index')->with('message', 'Item updated successfully.');
	}

    public function destroy($id)
	{
        $this->floorplan->destroy($id);
		return redirect()->route('floorplans.index')->with('message', 'Item deleted successfully.');
	}
}
