@extends('app')

@section('content')


    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            {{ Form::open(['route' => 'secondQuestionPost', 'class' => 'form-inline']) }}
            <div class="d-grid gap-2">
                <button class="btn btn-lg button" type="submit" name="room" value="1">1 Bedroom ( Classic - Loft )</button>
                <button class="btn btn-lg button" type="submit" name="room" value="2">2 Bedroom ( Classic - Duplex)</button>
                <button class="btn btn-lg button" type="submit" name="room" value="3">3 Bedroom</button>
                <button class="btn btn-lg button" type="submit" name="room" value="penthouse">Penthouse</button>
            </div>
            {{ Form::close() }}
        </div>
        <div class="col-2"></div>
    </div>



@endsection
