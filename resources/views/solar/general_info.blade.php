@extends('index')

@section('content')
    <body class="no-sidebar">

    <div id="page-wrapper">


        <div id="header">
            @include('header')
        </div>
        <div class="wrapper style1">
            <section class="container special">
                <div class="titulo">
                    <h2>{{Lang::get('solar_decathlon.about_competition')}}</h2>
                </div>
                <div class="contenido">
                    <div>
                        <p>{!!Lang::get('solar_decathlon.competition')!!}</p>
                    </div>
                </div>
                <div class="contenido">
                    <div>
                        <p>{!! Lang::get('solar_decathlon.facebook') !!}</p>
                    </div>
                </div>
                <br>
                <div class="contenido">
                    <div class="yt_container">
                        <iframe class="yt_video" src="https://www.youtube.com/embed/bh8TdwXGuc8" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>

            </section>
        </div>
    </div>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

@endsection('content')