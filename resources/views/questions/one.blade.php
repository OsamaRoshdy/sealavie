@extends('app')

@section('content')

    {{ Form::open(['route' => 'firstQuestionPost', 'class' => 'form-inline']) }}
    <div class="d-grid gap-2">
        <button class="btn btn-lg btn-primary" type="submit">Residential</button>
        <button class="btn btn-lg btn-primary" type="submit">Commercial</button>
    </div>
    {{ Form::close() }}

@endsection
