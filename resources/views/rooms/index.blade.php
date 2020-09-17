@extends('crud-layout')
@section('header')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>All Rooms</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('rooms.create') }}"> Create New Room</a>
        </div>
    </div>
</div>
@endsection

@section('content')
<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Roomtype</th>
        <th>Department</th>
        <th>Building</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($rooms as $room)
        <tr>
            <td>
                {{$room->id}}
            </td>
            <td>
                {{$room->name}}
            </td>
            <td>
                {{$room->roomtype->name}}
            </td>
            <td>
                {{$room->department->name}}
            </td>
            <td>
                {{$room->building->name}}
            </td>
            <td>
                {{$room->created_at}}
            </td>
            <td>
                {{$room->updated_at}}
            </td>
            <td>
                <form action="{{ route('rooms.destroy', $room->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('rooms.show', $room->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('rooms.edit', $room->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<div>
    {{ $rooms->links() }}
</div>
@endsection
