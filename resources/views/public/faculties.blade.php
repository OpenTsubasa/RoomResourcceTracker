@extends('layouts.master')

@section('title', 'Faculties')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <h2>All Faculties</h2>
            <table id="data" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($faculties as $faculty)
                    <tr>
                        <td>{{$faculty->name}}</td>
                        <td>{{$faculty->created_at}}</td>
                        <td>{{$faculty->updated_at}}</td>
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