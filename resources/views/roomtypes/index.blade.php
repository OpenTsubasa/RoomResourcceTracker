@extends('crud-layout')
@section('header')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>All Roomtypes</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('roomtypes.create') }}"> Create New Roomtype</a>
        </div>
    </div>
</div>
@endsection

@section('content')
<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($roomtypes as $roomtype)
        <tr>
            <td>
                {{$roomtype->name}}
            </td>
            <td>
                {{$roomtype->created_at}}
            </td>
            <td>
                {{$roomtype->updated_at}}
            </td>
            <td>
                <form action="{{ route('roomtypes.destroy', $roomtype->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('roomtypes.show', $roomtype->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('roomtypes.edit', $roomtype->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<div>
    {{ $roomtypes->links() }}
</div>
@endsection
