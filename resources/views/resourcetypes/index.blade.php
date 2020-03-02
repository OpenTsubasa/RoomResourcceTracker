@extends('crud-layout')
@section('header')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>All Resourcetypes</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('resourcetypes.create') }}"> Create New Resourcetype</a>
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
    @foreach ($resourcetypes as $resourcetype)
        <tr>
            <td>
                {{$resourcetype->name}}
            </td>
            <td>
                {{$resourcetype->created_at}}
            </td>
            <td>
                {{$resourcetype->updated_at}}
            </td>
            <td>
                <form action="{{ route('resourcetypes.destroy', $resourcetype->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('resourcetypes.show', $resourcetype->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('resourcetypes.edit', $resourcetype->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
