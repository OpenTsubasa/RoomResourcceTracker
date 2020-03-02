<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Department;
use App\Faculty;
use App\Building;

class DepartmentController extends Controller
{
    protected $department;

    public function __construct()
    {
        $this->department = new Department();
    }

    public function index()
    {
        $departments = $this->department->paginate();
        return view('departments.index', compact('departments'));
    }

    public function create()
    {
        $faculties = Faculty::all();
        $buildings = Building::all();
        return view('departments.create', compact('faculties', 'buildings'));
    }

    public function store(Request $request)
    {
        $request->validate(
            array (
              'name' => 'required',
              'faculty_id' => 'required',
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
            $this->department->$k = $v;
        }
        $this->department->save();
        return redirect()->route('departments.index')->with('message', 'Item created successfully.');
    }

    public function show($id)
    {
        $department = $this->department->findOrFail($id);
        return view('departments.show', compact('department'));
    }

    public function edit($id)
    {
        $faculties = Faculty::all();
        $buildings = Building::all();
        $department = $this->department->findOrFail($id);
        return view('departments.edit', compact('department', 'faculties', 'buildings'));
    }

    public function update(Request $request, $id)
	{
        $request->validate(
            array (
              'name' => 'required',
              'faculty_id' => 'required',
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

		$department = $this->department->findOrFail($id);
        foreach($inputs as $k => $v){
            if(is_array($v)){
                $v = implode(",", $v);
            }
            $department->$k = $v;
        }
        $department->save();
		return redirect()->route('departments.index')->with('message', 'Item updated successfully.');
	}

    public function destroy($id)
	{
        $this->department->destroy($id);
		return redirect()->route('departments.index')->with('message', 'Item deleted successfully.');
	}
}
