@extends('index')

@section('content')

    @include('header')

    <div class="wrapper style1">
        <div id="titulo">
            <h2>{{Lang::get('solar_decathlon.about_competition')}}</h2>
        </div>
        <div class="container">
            <div id="">
                <p>{!!Lang::get('solar_decathlon.competition')!!}</p>
            </div>
        </div>
    </div>
@endsection('content')