@extends('layouts.master')

@section('title', 'Tours')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <h2>All Tours</h2>
            <table id="data" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Room</th>
                        <th>Department</th>
                        <th>Floor Plan</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tours as $tour)
                    <tr>
                        <td>{{$tour->id}}</td>
                        <td><a target="_blank" href="{{$tour->name}}">{{$tour->name}}</a></td>
                        <td>{{$tour->room->name}}</td>
                        <td>{{$tour->room->department->name}}</td>
                        <td><a target="_blank" href="{{$tour->floorplan->name}}">{{$tour->floorplan->name}}</a></td>
                        <td>{{$tour->created_at}}</td>
                        <td>{{$tour->updated_at}}</td>
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