@extends('app')

@section('content')

    {{ Form::open(['route' => 'startPost', 'class' => 'form-inline',]) }}
        <button type="submit" class="btn btn-lg button" style="font-size: 30px" >Start</button>
        {{ Form::close() }}
@endsection
