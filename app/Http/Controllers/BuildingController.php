<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Building;

class BuildingController extends Controller
{
    protected $building;

    public function __construct()
    {
        $this->building = new Building();
    }

    public function index()
    {
        $buildings = $this->building->paginate();
        return view('buildings.index', compact('buildings'));
    }

    public function create()
    {
        return view('buildings.create');
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
            $this->building->$k = $v;
        }
        $this->building->save();
        return redirect()->route('buildings.index')->with('message', 'Item created successfully.');
    }

    public function show($id)
    {
        $building = $this->building->findOrFail($id);
        return view('buildings.show', compact('building'));
    }

    public function edit($id)
    {
        $building = $this->building->findOrFail($id);
        return view('buildings.edit', compact('building'));
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

		$building = $this->building->findOrFail($id);
        foreach($inputs as $k => $v){
            if(is_array($v)){
                $v = implode(",", $v);
            }
            $building->$k = $v;
        }
        $building->save();
		return redirect()->route('buildings.index')->with('message', 'Item updated successfully.');
	}

    public function destroy($id)
	{
        $this->building->destroy($id);
		return redirect()->route('buildings.index')->with('message', 'Item deleted successfully.');
	}
}
