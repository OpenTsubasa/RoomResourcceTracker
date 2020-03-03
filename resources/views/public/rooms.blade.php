@extends('layouts.master')

@section('title', 'Rooms')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <h2>All Rooms</h2>
            <table id="data" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Room Type</th>
                        <th>Department</th>
                        <th>Building</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rooms as $room)
                    <tr>
                        <td>{{$room->name}}</td>
                        <td>{{$room->roomtype->name}}</td>
                        <td>{{$room->department->name}}</td>
                        <td>{{$room->building->name}}</td>
                        <td>{{$room->created_at}}</td>
                        <td>{{$room->updated_at}}</td>
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