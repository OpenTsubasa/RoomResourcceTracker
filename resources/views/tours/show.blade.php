@extends('crud-layout')
@section('header')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show Tours</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('tours.index') }}"> Back</a>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{$tour->name}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Room Id:</strong>
            {{$tour->room_id}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Floorplan Id:</strong>
            {{$tour->floorplan_id}}
        </div>
    </div>
</div>
@endsection
