@extends('layouts.master')

@section('title', 'Resource Types')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <h2>All Resource Types</h2>
            <table id="data" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($resourcetypes as $resourcetype)
                    <tr>
                        <td>{{$resourcetype->name}}</td>
                        <td>{{$resourcetype->created_at}}</td>
                        <td>{{$resourcetype->updated_at}}</td>
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