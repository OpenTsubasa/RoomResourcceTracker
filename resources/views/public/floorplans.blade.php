@extends('layouts.master')

@section('title', 'Floor Plans')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <h2>All Floor Plans</h2>
            <table id="data" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Tour</th>
                        <th>Room</th>
                        <th>Department</th>
                        <th>Building</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($floorplans as $floorplan)
                    <tr>
                        <td>{{$floorplan->id}}</td>
                        <td><a target="_blank" href="{{$floorplan->name}}">{{$floorplan->name}}</a></td>
                        <td><a target="_blank" href="{{$floorplan->tour}}">{{$floorplan->tour}}</a></td>
                        <td>{{$floorplan->room->name}}</td>
                        <td>{{$floorplan->room->department->name}}</td>
                        <td>{{$floorplan->room->building->name}}</td>
                        <td>{{$floorplan->created_at}}</td>
                        <td>{{$floorplan->updated_at}}</td>
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