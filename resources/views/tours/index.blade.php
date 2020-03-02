@extends('crud-layout')
@section('header')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>All Tours</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('tours.create') }}"> Create New Tour</a>
        </div>
    </div>
</div>
@endsection

@section('content')
<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Room Id</th>
        <th>Floorplan Id</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($tours as $tour)
        <tr>
            <td>
                {{$tour->name}}
            </td>
            <td>
                {{$tour->room_id}}
            </td>
            <td>
                {{$tour->floorplan_id}}
            </td>
            <td>
                {{$tour->created_at}}
            </td>
            <td>
                {{$tour->updated_at}}
            </td>
            <td>
                <form action="{{ route('tours.destroy', $tour->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('tours.show', $tour->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('tours.edit', $tour->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
