@extends('crud-layout')
@section('header')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create Resource</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('resources.index') }}"> Back</a>
        </div>
    </div>
</div>
@endsection

@section('content')
<form action="{{ route('resources.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Room:</strong>
                        <select name="room_id" class="form-control">
                            <option value="">--Select--</option>
                            @foreach ($rooms as $room)
                            <option value="{{$room->id}}">{{$room->name}} - {{$room->building->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Resource Type:</strong>
                        <select name="resourcetype_id" class="form-control">
                            <option value="">--Select--</option>
                            @foreach ($resourcetypes as $resourcetype)
                            <option value="{{$resourcetype->id}}">{{$resourcetype->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Count:</strong>
                        <input
                            type="number"
                            step="1"
                            name="count"
                            class="form-control"
                            placeholder="Count">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
