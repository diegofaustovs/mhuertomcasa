
@extends('index')

@section('content')

    @include('header')

    <div class="wrapper style1">
        <div id="titulo">
            <h2>{{Lang::get('equipo_gestion.equipo')}}</h2>
        </div>
        <section class="carousel">
            <div class="reel">

                <article>
                    <img src="images/gestion02.JPG" alt="" />
                </article>

                <article>
                    <img src="images/gestion02.JPG" alt="" />
                </article>

                <article>
                    <img src="images/gestion02.JPG" alt="" />
                </article>

                <article>
                    <img src="images/gestion02.JPG" alt="" />
                </article>

                <article>
                    <img src="images/gestion02.JPG" alt="" />
                </article>

                <article>
                    <img src="images/gestion02.JPG" alt="" />
                </article>

                <article>
                    <img src="images/gestion02.JPG" alt="" />
                </article>
            </div>
        </section>
        <div id="parrafo">
            <p>{{Lang::get('equipo_gestion.motivacion')}}</p>
        </div>
    </div>
    @endsection('content')