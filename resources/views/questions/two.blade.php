@extends('app')

@section('content')

    {{ Form::open(['route' => 'secondQuestionPost', 'class' => 'form-inline']) }}
    <div class="d-grid gap-2">
        <button class="btn btn-lg btn-primary" type="submit">1 BR ( classic - loft )</button>
        <button class="btn btn-lg btn-primary" type="submit">2 BR ( classic - duplex)</button>
        <button class="btn btn-lg btn-primary" type="submit">3 BR</button>
        <button class="btn btn-lg btn-primary" type="submit">4 BR</button>
        <button class="btn btn-lg btn-primary" type="submit">Amenities</button>
    </div>
    {{ Form::close() }}

@endsection
