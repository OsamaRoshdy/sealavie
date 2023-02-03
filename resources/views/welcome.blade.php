@extends('app')

@section('content')

    {{ Form::open(['route' => 'welcomePost', 'class' => 'form-inline']) }}
    <div class="mb-3">
        <h4>Your Name</h4>
        <input type="text" class="form-control" id="exampleFormControlInput1" autocomplete="off">
    </div>
    <div class="mb-3">
        <h4>Your Phone Number</h4>
        <input type="text" class="form-control" id="exampleFormControlInput1" autocomplete="off">
    </div>


    <button type="submit" class="btn btn-lg btn-primary">Start</button>

    {{ Form::close() }}
@endsection
