@extends('crud-layout')
@section('header')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show Resources</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('resources.index') }}"> Back</a>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Room Id:</strong>
            {{$resource->room_id}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Resourcetype Id:</strong>
            {{$resource->resourcetype_id}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Count:</strong>
            {{$resource->count}}
        </div>
    </div>
</div>
@endsection
