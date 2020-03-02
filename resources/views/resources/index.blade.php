@extends('crud-layout')
@section('header')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>All Resources</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('resources.create') }}"> Create New Resource</a>
        </div>
    </div>
</div>
@endsection

@section('content')
<table class="table table-bordered">
    <tr>
        <th>Room Id</th>
        <th>Resourcetype Id</th>
        <th>Count</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($resources as $resource)
        <tr>
            <td>
                {{$resource->room_id}}
            </td>
            <td>
                {{$resource->resourcetype_id}}
            </td>
            <td>
                {{$resource->count}}
            </td>
            <td>
                {{$resource->created_at}}
            </td>
            <td>
                {{$resource->updated_at}}
            </td>
            <td>
                <form action="{{ route('resources.destroy', $resource->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('resources.show', $resource->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('resources.edit', $resource->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
