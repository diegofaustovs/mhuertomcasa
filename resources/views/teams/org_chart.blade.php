@extends('index')

@section('content')
    <body class="no-sidebar">

    <div id="page-wrapper">


        <div id="header">
            @include('header')
        </div>
        <div class="wrapper style1">
            <div class="titulo">
                <h2>{{Lang::get('miscellaneous.org_chart')}}</h2>
                <br>
            </div>
            <div class="contenido">
                <img style="width: 100%" src="{{asset('images/Organigrama.png')}}">
            </div>
        </div>
    </div>
@endsection('content')