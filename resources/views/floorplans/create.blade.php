@extends('crud-layout')
@section('header')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create Floorplan</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('floorplans.index') }}"> Back</a>
        </div>
    </div>
</div>
@endsection

@section('content')
<form action="{{ route('floorplans.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            placeholder="Name">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Room Id:</strong>
                        <input
                            type="number"
                            step="1"
                            name="room_id"
                            class="form-control"
                            placeholder="Room Id">
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
