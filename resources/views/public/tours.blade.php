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
                        <th>Floor</th>
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
                        <td><a target="_blank" href="{{$tour->name}}"><img src="http://vrlab.ru.ac.bd/rrt/public/tour.png" width="30" height="30"> - Room</a></td>
                        <td><a target="_blank" href="{{$tour->floor}}"><img src="http://vrlab.ru.ac.bd/rrt/public/fp.png" width="30" height="25"> - Room</a></td>
                        <td>{{$tour->room->name}}</td>
                        <td>{{$tour->room->department->name}}</td>
                        <td><a target="_blank" href="{{$tour->floorplan->name}}"><img src="http://vrlab.ru.ac.bd/rrt/public/fp.png" width="30" height="25"> - Plan</a></td>
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