@extends('app')

@section('content')

    {{ Form::open(['route' => 'startPost', 'class' => 'form-inline',]) }}
        <button type="submit" class="btn btn-lg btn-success">Start</button>
        {{ Form::close() }}
@endsection
