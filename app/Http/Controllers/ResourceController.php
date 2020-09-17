<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Resource;
use App\Room;
use App\Resourcetype;

class ResourceController extends Controller
{
    protected $resource;

    public function __construct()
    {
        $this->resource = new Resource();
    }

    public function index()
    {
        $resources = $this->resource->paginate();
        return view('resources.index', compact('resources'));
    }

    public function create()
    {
        $rooms = Room::all();
        $resourcetypes = ResourceType::all();
        return view('resources.create', compact('rooms', 'resourcetypes'));
    }

    public function store(Request $request)
    {
        $request->validate(
            array (
              'room_id' => 'required',
              'resourcetype_id' => 'required',
              'count' => 'required',
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
            $this->resource->$k = $v;
        }
        $this->resource->save();
        return redirect()->route('resources.index')->with('message', 'Item created successfully.');
    }

    public function show($id)
    {
        $resource = $this->resource->findOrFail($id);
        return view('resources.show', compact('resource'));
    }

    public function edit($id)
    {
        $rooms = Room::all();
        $resourcetypes = ResourceType::all();
        $resource = $this->resource->findOrFail($id);
        return view('resources.edit', compact('resource', 'rooms', 'resourcetypes'));
    }

    public function update(Request $request, $id)
	{
        $request->validate(
            array (
              'room_id' => 'required',
              'resourcetype_id' => 'required',
              'count' => 'required',
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

		$resource = $this->resource->findOrFail($id);
        foreach($inputs as $k => $v){
            if(is_array($v)){
                $v = implode(",", $v);
            }
            $resource->$k = $v;
        }
        $resource->save();
		return redirect()->route('resources.index')->with('message', 'Item updated successfully.');
	}

    public function destroy($id)
	{
        $this->resource->destroy($id);
		return redirect()->route('resources.index')->with('message', 'Item deleted successfully.');
	}
}
