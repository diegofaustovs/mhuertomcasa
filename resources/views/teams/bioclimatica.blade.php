@extends('index')

@section('content')<body class="no-sidebar">

<div id="page-wrapper">


    <div id="header">
        @include('header')
    </div>
    <div class="wrapper style1">
        <div id="titulo">
            <h2>{{Lang::get('equipo_bioclimatica.equipo')}}</h2>
        </div>
        <section class="carousel">
            <div class="reel">

                <article>
                    <img src="images/gestion02.JPG" alt=""/>
                </article>

                <article>
                    <img src="images/gestion02.JPG" alt=""/>
                </article>

                <article>
                    <img src="images/gestion02.JPG" alt=""/>
                </article>

                <article>
                    <img src="images/gestion02.JPG" alt=""/>
                </article>

                <article>
                    <img src="images/gestion02.JPG" alt=""/>
                </article>

                <article>
                    <img src="images/gestion02.JPG" alt=""/>
                </article>

                <article>
                    <img src="images/gestion02.JPG" alt=""/>
                </article>
            </div>
        </section>
        <div class="container">
            <div id="">
                <p>{{Lang::get('equipo_bioclimatica.motivacion')}}</p>
            </div>

            <div id="titulo">
                <h2>{{Lang::get('miscellaneous.miembros_equipo')}}</h2>
            </div>

            <div class="row">
                @for($i = 1; $i < Lang::get('equipo_bioclimatica.nintegrantes') + 1; $i++)
                    <article class="4u 12u(mobile) special" style="">
                        <div class="circular" style="margin: 0 auto">
                            <img src="
                                <?php $foto = Lang::get('equipo_bioclimatica.deca_' . $i . '.foto');
                            if ($foto == "")
                                echo "https://scontent-mia1-1.xx.fbcdn.net/hphotos-xaf1/v/t1.0-9/10537094_10153137106807908_3082799598362301392_n.jpg?oh=238dde5f4ab27e1dcf7c021a5dd603fe&oe=55F2A046";
                            //echo asset("images/logomhmc.png");
                            else echo $foto;
                            ?>
                            ">
                        </div>
                        <p style="text-align: center; margin-top: 1em">{{Lang::get('equipo_bioclimatica.deca_'.$i.'.nombre')}}
                            <br>
                            {{Lang::get('equipo_bioclimatica.deca_'.$i.'.cargo')}}</p>
                    </article>
                @endfor
            </div>
        </div>
    </div>
</div>
@endsection('content')