
@extends('index')

@section('content')



    <body class="no-sidebar">

    <div id="page-wrapper">


        <div id="header">
            @include('header')
        </div>
        <!-- Features -->


        @foreach($items as $item)
            <div class="wrapper style1">
                <div class="container">
                    <div id="titulo">
                        <h2>{{ $item->get_title() }}</h2>
                    </div>
                    <br>
                    <article id="main" class="special">
                        {!! $item->get_content() !!}
                    </article>
                    <i>{{$item->get_author()->get_name()}}-{{$item->get_date()}}</i>
                    <hr>
                </div>
            </div>
        @endforeach


    </div>

    </body>

@endsection('content')