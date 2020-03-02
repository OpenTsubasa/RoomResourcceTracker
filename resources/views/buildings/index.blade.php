@extends('crud-layout')
@section('header')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>All Buildings</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('buildings.create') }}"> Create New Building</a>
        </div>
    </div>
</div>
@endsection

@section('content')
<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Location</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($buildings as $building)
        <tr>
            <td>
                {{$building->name}}
            </td>
            <td>
                {{$building->location}}
            </td>
            <td>
                {{$building->created_at}}
            </td>
            <td>
                {{$building->updated_at}}
            </td>
            <td>
                <form action="{{ route('buildings.destroy', $building->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('buildings.show', $building->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('buildings.edit', $building->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
