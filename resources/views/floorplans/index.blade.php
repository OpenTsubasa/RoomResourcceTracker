@extends('crud-layout')
@section('header')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>All Floorplans</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('floorplans.create') }}"> Create New Floorplan</a>
        </div>
    </div>
</div>
@endsection

@section('content')
<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Room Id</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($floorplans as $floorplan)
        <tr>
            <td>
                {{$floorplan->name}}
            </td>
            <td>
                {{$floorplan->room_id}}
            </td>
            <td>
                {{$floorplan->created_at}}
            </td>
            <td>
                {{$floorplan->updated_at}}
            </td>
            <td>
                <form action="{{ route('floorplans.destroy', $floorplan->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('floorplans.show', $floorplan->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('floorplans.edit', $floorplan->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
