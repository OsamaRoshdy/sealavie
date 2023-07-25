@extends('app')

@section('content')

    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            {{ Form::open(['route' => 'welcomePost', 'class' => 'form-inline']) }}
            <div class="mb-3">
{{--                <h4>Your Name</h4>--}}
                <input type="text" class="form-control input" id="exampleFormControlInput1" placeholder="Enter Your Name" autocomplete="off">
            </div>
            <div class="mb-3">
{{--                <h4>Your Phone Number</h4>--}}
                <input type="text" class="form-control input"  id="exampleFormControlInput1" placeholder="Enter Your Phone Number" autocomplete="off">
            </div>


            <button type="submit" class="btn btn-lg button">Start</button>

            {{ Form::close() }}
        </div>
        <div class="col-2"></div>
    </div>

@endsection
