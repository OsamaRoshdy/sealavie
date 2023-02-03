@extends('app')

@section('content')

    {{ Form::open(['route' => 'sessionPost', 'class' => 'form-inline',]) }}
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Device ID</label>
            <input type="text" name="deviceId" class="form-control" id="exampleFormControlInput1" required>
        </div>
        <button type="submit" class="btn btn-lg btn-primary">Set Device ID</button>
    {{ Form::close() }}
@endsection
