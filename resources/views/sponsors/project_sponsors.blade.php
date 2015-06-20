
@extends('index')

@section('content')

    <body class="no-sidebar">

    <div id="page-wrapper">


        <div id="header">
            @include('header')
        </div>
        <!-- Features -->
        <div class="wrapper style1">

            <section class="container special">
                <header>
                    <h2 class="titulo">{{Lang::get('p_proyecto.header')}}</h2>
                    <h3 id="subtitle">{{Lang::get('p_proyecto.description')}}</h3>
                </header>
                <div class="row">
                        <div class="patro col-md-4">
                            <img class="imgcentrada patro1" src="images/patro1.jpg" alt="" />
                        </div>
                    <div class="patro col-md-4">
                        <img class="imgcentrada patro1" src="images/patro2.jpg" alt="" />
                    </div>
                    <div class="patro col-md-4">
                        <img class="imgcentrada patro1" src="images/patro3.jpg" alt="" />
                    </div>
                </div>

                <div class="row">
                    <div class="patro col-md-6">
                        <img class="imgcentrada patro" src="images/patro4.jpg" alt="" />
                    </div>
                    <div class="patro col-md-6">
                        <img class="imgcentrada patro" src="images/patro5.jpg" alt="" />
                    </div>
                </div>

                <div class="contenido">
                    <div class="row text-center">
                        <header>
                            <h4 class="patro2">{{Lang::get('p_proyecto.codensa.name')}}</h4>
                        </header>
                        <p class="patro3">{{Lang::get('p_proyecto.codensa.description')}}</p>
                    </div>

                    <div class="row text-center">
                        <header>
                            <h4 class="patro2"><a href="#">Apiros</a></h4>
                        </header>
                        <p class="patro3">{!! Lang::get('p_proyecto.apiros.description') !!}</p>
                    </div>

                    <div class="row text-center">
                        <header>
                            <h4 class="patro2"><a href="#">Innovandes</a></h4>
                        </header>
                        <p class="patro3">{{Lang::get('p_proyecto.innovandes.description')}}</p>
                    </div>
                </div>

            </section>

        </div>

    </div>

@endsection('content')