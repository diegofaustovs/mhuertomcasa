@extends('index')

@section('content')

    @include('header')

    <div class="wrapper style1">
        <div id="titulo">
            <h2>{{Lang::get('miscellaneous.org_chart')}}</h2>
        </div>
        <div class="container">
            <img style="width: 100%" src="{{asset('images/organigrama.png')}}">
        </div>
    </div>
@endsection('content')