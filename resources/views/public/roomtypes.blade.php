@extends('layouts.master')

@section('title', 'Room Types')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <h2>All Room Types</h2>
            <table id="data" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roomtypes as $roomtype)
                    <tr>
                        <td>{{$roomtype->id}}</td>
                        <td>{{$roomtype->name}}</td>
                        <td>{{$roomtype->created_at}}</td>
                        <td>{{$roomtype->updated_at}}</td>
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