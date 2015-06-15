
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
                    <div id="titulo"><h2>{{Lang::get('p_proyecto.header')}}</h2></div>
                    <p>{{Lang::get('p_proyecto.description')}}</p>
                </header>

                <div class="row">
                    <div class="6u 12(mobile)">
                        <a href="#" class="image featured"><img src="images/emgesa_codensa_enel.png" alt="" /></a>
                    </div>
                    <div class="6u 12(mobile)">
                        <header>
                            <h3>{{Lang::get('p_proyecto.codensa.name')}}</h3>
                        </header>
                        <p>{{Lang::get('p_proyecto.codensa.description')}}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="6u 12(mobile)">
                        <header>
                            <h3><a href="#">Apiros</a></h3>
                        </header>
                        <p>{{Lang::get('p_proyecto.apiros.description')}}</p>
                    </div>
                    <div class="6u 12(mobile)">
                        <a href="#" class="image featured"><img src="images/apiros.png" alt="" /></a>
                    </div>
                </div>

                <div class="row">
                    <div class="6u 12(mobile)">
                        <a href="#" class="image featured"><img src="images/innovandes.jpg" alt="" /></a>
                    </div>
                    <div class="6u 12(mobile)">
                        <header>
                            <h3><a href="#">Innovandes</a></h3>
                        </header>
                        <p>{{Lang::get('p_proyecto.innovandes.description')}}</p>
                    </div>
                </div>

                <div class="row">
                    <article class="4u 12u(mobile) special">
                        <a href="#" class="image featured"><img src="images/emgesa_codensa_enel.png" alt="" /></a>
                        <header>
                            <h3>{{Lang::get('p_proyecto.codensa.name')}}</h3>
                        </header>
                        <p>{{Lang::get('p_proyecto.codensa.description')}}</p>
                    </article>
                    <article class="4u 12u(mobile) special">
                        <a href="#" class="image featured"><img src="images/apiros.png" alt="" /></a>
                        <header>
                            <h3><a href="#">Apiros</a></h3>
                        </header>
                        <p>{{Lang::get('p_proyecto.apiros.description')}}</p>
                    </article>
                    <article class="4u 12u(mobile) special">
                        <a href="#" class="image featured"><img src="images/innovandes.jpg" alt="" /></a>
                        <header>
                            <h3><a href="#">Innovandes</a></h3>
                        </header>
                        <p>{{Lang::get('p_proyecto.innovandes.description')}}</p>
                    </article>

                </div>
            </section>

        </div>

    </div>

    </body>

@endsection('content')