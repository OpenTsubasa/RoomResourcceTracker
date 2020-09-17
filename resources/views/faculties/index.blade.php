@extends('crud-layout')
@section('header')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>All Faculties</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('faculties.create') }}"> Create New Faculty</a>
        </div>
    </div>
</div>
@endsection

@section('content')
<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($faculties as $faculty)
        <tr>
            <td>
                {{$faculty->id}}
            </td>
            <td>
                {{$faculty->name}}
            </td>
            <td>
                {{$faculty->created_at}}
            </td>
            <td>
                {{$faculty->updated_at}}
            </td>
            <td>
                <form action="{{ route('faculties.destroy', $faculty->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('faculties.show', $faculty->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('faculties.edit', $faculty->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<div>
    {{ $faculties->links() }}
</div>
@endsection
