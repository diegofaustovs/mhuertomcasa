@extends('index')

@section('content')
    <body class="no-sidebar">

    <div id="page-wrapper">


        <div id="header">
            @include('header')
        </div>
        <div class="wrapper style1">
            <div class="titulo">
                <h2>{{Lang::get('navbar.videos')}}</h2>
            </div>
            <br>
            <section class="container">
                <div class="contenido">
                    <div class="row">
                        <article class="6u 12u(mobile) special">
                            <div class="yt_container">
                                <iframe class="yt_video" src="https://www.youtube.com/embed/xUShMr0S_n8" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </article>
                        <article class="6u 12u(mobile) special">
                            <div class="yt_container">
                                <iframe class="yt_video" src="https://www.youtube.com/embed/gRMIKWxDRrI" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </article>
                        <article class="6u 12u(mobile) special">
                            <div class="yt_container">
                                <iframe class="yt_video" src="https://www.youtube.com/embed/gRMIKWxDRrI" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </article>
                        <article class="6u 12u(mobile) special">
                            <div class="yt_container">
                                <iframe class="yt_video" src="https://www.youtube.com/embed/VIElRbSifRs" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection('content')