
@extends('index')

@section('content')

    <body class="no-sidebar">

    <div id="page-wrapper">


        <div id="header">
            @include('header')
        </div>
        <!-- Features -->
        <div class="wrapper style1">

            <section id="features" class="container special">




                <header>
                    <h2 class="titulo">{{Lang::get('p_proyecto.header')}}</h2>
                    <h3 id="subtitle">{{Lang::get('p_proyecto.description')}}</h3>
                </header>


                <div class="row">
                    <div class="1u 12(mobile)"></div>

                    <div class="5u 12(mobile)">
                        <a href="#" class="image left"><img src="images/emgesa_codensa_enel.png" alt="" /></a>
                    </div>

                    <div class="5u 12(mobile)">
                        <header>
                            <h4>{{Lang::get('p_proyecto.codensa.name')}}</h4>
                        </header>
                        <p>{{Lang::get('p_proyecto.codensa.description')}}</p>
                    </div>

                </div>

                <div class="row">

                    <div class="1u 12(mobile)"></div>
                    <div class="5u 12(mobile)">
                        <header>
                            <h4><a href="#">Apiros</a></h4>
                        </header>
                        <p class="text left">{!! Lang::get('p_proyecto.apiros.description') !!}</p>
                    </div>
                    <div class="5u 12(mobile)">
                        <a href="#" class="image featured"><img src="images/apiros.png" alt="" /></a>
                    </div>

                </div>

                <div class="row">

                    <div class="1u 12(mobile)"></div>
                    <div class="5u 12(mobile)">
                        <a href="#" class="image left"><img src="images/innovandes.jpg" alt="" /></a>
                    </div>
                    <div class="5u 12(mobile)">
                        <header>
                            <h4><a href="#">Innovandes</a></h4>
                        </header>
                        <p>{{Lang::get('p_proyecto.innovandes.description')}}</p>
                    </div>

                </div>

            </section>

        </div>

    </div>

@endsection('content')