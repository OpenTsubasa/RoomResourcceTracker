<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Resourcetype;

class ResourcetypeController extends Controller
{
    protected $resourcetype;

    public function __construct()
    {
        $this->resourcetype = new Resourcetype();
    }

    public function index()
    {
        $resourcetypes = $this->resourcetype->paginate();
        return view('resourcetypes.index', compact('resourcetypes'));
    }

    public function create()
    {
        return view('resourcetypes.create');
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
            $this->resourcetype->$k = $v;
        }
        $this->resourcetype->save();
        return redirect()->route('resourcetypes.index')->with('message', 'Item created successfully.');
    }

    public function show($id)
    {
        $resourcetype = $this->resourcetype->findOrFail($id);
        return view('resourcetypes.show', compact('resourcetype'));
    }

    public function edit($id)
    {
        $resourcetype = $this->resourcetype->findOrFail($id);
        return view('resourcetypes.edit', compact('resourcetype'));
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

		$resourcetype = $this->resourcetype->findOrFail($id);
        foreach($inputs as $k => $v){
            if(is_array($v)){
                $v = implode(",", $v);
            }
            $resourcetype->$k = $v;
        }
        $resourcetype->save();
		return redirect()->route('resourcetypes.index')->with('message', 'Item updated successfully.');
	}

    public function destroy($id)
	{
        $this->resourcetype->destroy($id);
		return redirect()->route('resourcetypes.index')->with('message', 'Item deleted successfully.');
	}
}
