@extends('app')

@section('content')

    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            {{ Form::open(['route' => 'sessionPost', 'class' => 'form-inline',]) }}
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Device ID</label>
                <input type="text" name="deviceId" class="form-control input" id="exampleFormControlInput1" required>
            </div>
            <button type="submit" class="btn btn-lg button">Set Device ID</button>
            {{ Form::close() }}
        </div>
        <div class="col-2"></div>
    </div>

@endsection
