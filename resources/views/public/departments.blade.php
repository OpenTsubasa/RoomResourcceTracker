@extends('layouts.master')

@section('title', 'Departments')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <h2>All Departments</h2>
            <table id="data" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Faculty</th>
                        <th>Building</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($departments as $department)
                    <tr>
                        <td>{{$department->id}}</td>
                        <td>{{$department->name}}</td>
                        <td>{{$department->faculty->name}}</td>
                        <td>{{$department->building->name}}</td>
                        <td>{{$department->created_at}}</td>
                        <td>{{$department->updated_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#data').DataTable();
        });
    </script>
@endsection