
@extends('index')

@section('content')



    <body class="no-sidebar">

    <div id="page-wrapper">


        <div id="header">
            @include('header')
        </div>
        <!-- Features -->

        @foreach($items as $item)

            <div class="wrapper news">
                <div class="container">
                    <div class="row">

                        <div class="2u 12(mobile)">

                        </div>

                        <div class="8u 12(mobile)">

                            <article class="special">
                                <div class="titulo">
                                    <h2 class="titulo">{{ $item->get_title() }}</h2>
                                </div>
                                <br>
                                {!! $item->get_content() !!}
                            </article>
                            <i>{{$item->get_date('j F Y')}}</i>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


        <div class="text-center">
            {!! $items->render() !!}
        </div>


    </div>

@endsection('content')