@extends('crud-layout')
@section('header')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>All Departments</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('departments.create') }}"> Create New Department</a>
        </div>
    </div>
</div>
@endsection

@section('content')
<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Faculty</th>
        <th>Building</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($departments as $department)
        <tr>
            <td>
                {{$department->id}}
            </td>
            <td>
                {{$department->name}}
            </td>
            <td>
                {{$department->faculty->name}}
            </td>
            <td>
                {{$department->building->name}}
            </td>
            <td>
                {{$department->created_at}}
            </td>
            <td>
                {{$department->updated_at}}
            </td>
            <td>
                <form action="{{ route('departments.destroy', $department->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('departments.show', $department->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('departments.edit', $department->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<div>
    {{ $departments->links() }}
</div>
@endsection
