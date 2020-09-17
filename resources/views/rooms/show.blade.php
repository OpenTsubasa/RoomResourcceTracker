@extends('crud-layout')
@section('header')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show Rooms</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('rooms.index') }}"> Back</a>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Id:</strong>
            {{$room->id}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{$room->name}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Roomtype:</strong>
            {{$room->roomtype->name}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Department:</strong>
            {{$room->department->name}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Building:</strong>
            {{$room->building->name}}
        </div>
    </div>
</div>
@endsection
