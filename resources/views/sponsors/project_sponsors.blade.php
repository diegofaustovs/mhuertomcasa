
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
                    <article class="6u 12u(mobile) special">
                        <a href="#" class="image featured"><img src="images/pic07.jpg" alt="" /></a>
                        <header>
                            <h3>{{Lang::get('p_proyecto.codensa.name')}}</h3>
                        </header>
                        <p>{{Lang::get('p_proyecto.codensa.description')}}</p>
                    </article>
                    <article class="6u 12u(mobile) special">
                        <a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>
                        <header>
                            <h3><a href="#">Apiros</a></h3>
                        </header>
                        <p>{{Lang::get('p_proyecto.apiros.description')}}</p>
                    </article>

                </div>
            </section>

        </div>

    </div>

    </body>

@endsection('content')