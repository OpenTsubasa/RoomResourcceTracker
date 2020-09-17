@extends('layouts.master')

@section('title', 'Buildings')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <h2>All Buildings</h2>
            <table id="data" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($buildings as $building)
                    <tr>
                        <td>{{$building->id}}</td>
                        <td>{{$building->name}}</td>
                        <td>{{$building->location}}</td>
                        <td>{{$building->created_at}}</td>
                        <td>{{$building->updated_at}}</td>
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