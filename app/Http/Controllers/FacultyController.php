<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Faculty;

class FacultyController extends Controller
{
    protected $faculty;

    public function __construct()
    {
        $this->faculty = new Faculty();
    }

    public function index()
    {
        $faculties = $this->faculty->paginate();
        return view('faculties.index', compact('faculties'));
    }

    public function create()
    {
        return view('faculties.create');
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
            $this->faculty->$k = $v;
        }
        $this->faculty->save();
        return redirect()->route('faculties.index')->with('message', 'Item created successfully.');
    }

    public function show($id)
    {
        $faculty = $this->faculty->findOrFail($id);
        return view('faculties.show', compact('faculty'));
    }

    public function edit($id)
    {
        $faculty = $this->faculty->findOrFail($id);
        return view('faculties.edit', compact('faculty'));
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

		$faculty = $this->faculty->findOrFail($id);
        foreach($inputs as $k => $v){
            if(is_array($v)){
                $v = implode(",", $v);
            }
            $faculty->$k = $v;
        }
        $faculty->save();
		return redirect()->route('faculties.index')->with('message', 'Item updated successfully.');
	}

    public function destroy($id)
	{
        $this->faculty->destroy($id);
		return redirect()->route('faculties.index')->with('message', 'Item deleted successfully.');
	}
}
