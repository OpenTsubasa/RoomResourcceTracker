@extends('layouts.master')

@section('title', 'Resources')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <h2>All Resources</h2>
            <table id="data" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Room</th>
                        <th>Department</th>
                        <th>Resource Type</th>
                        <th>Count</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($resources as $resource)
                    <tr>
                        <td>{{$resource->room->name}}</td>
                        <td>{{$resource->room->department->name}}</td>
                        <td>{{$resource->resourcetype->name}}</td>
                        <td>{{$resource->count}}</td>
                        <td>{{$resource->created_at}}</td>
                        <td>{{$resource->updated_at}}</td>
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
            $("#data").append(
                $('<tfoot/>').append( $("#data thead tr").clone() )
            );
            $('#data').DataTable({
                "footerCallback": function ( row, data, start, end, display ) {
                    var api = this.api(), data;
        
                    // Remove the formatting to get integer data for summation
                    var intVal = function ( i ) {
                        return parseInt(i);
                    };
        
                    // Total over all pages
                    total = api
                        .column( 3 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    // Total over this page
                    pageTotal = api
                        .column( 3, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    // Update footer
                    $( api.column( 0 ).footer() ).html('');
                    $( api.column( 1 ).footer() ).html('');
                    $( api.column( 2 ).footer() ).html('Page Total:');
                    $( api.column( 3 ).footer() ).html(pageTotal);
                    $( api.column( 4 ).footer() ).html('Gross Total:');
                    $( api.column( 5 ).footer() ).html(total);
                }
            });
        });
    </script>
@endsection