@extends('index')

@section('content')
    <body class="no-sidebar">

    <div id="page-wrapper">


        <div id="header">
            @include('header')
        </div>
        <div class="wrapper style1">
            <div class="titulo">
                <h2>{{Lang::get('equipo_bioclimatica.equipo')}}</h2>
            </div>
            <section class="carousel">
                <div class="reel">
                    @for($i = 1; $i < Lang::get('equipo_bioclimatica.n_f_banner') + 1; $i++)
                        <article>
                            <img class="carousel-img" src="{{Lang::get('equipo_bioclimatica.f_banner_' . $i)}}" alt=""/>
                        </article>
                    @endfor
                </div>
            </section>
            <section class="container">
                <div class="contenido">
                    <div>
                        <p>{{Lang::get('equipo_bioclimatica.motivacion')}}</p>
                    </div>

                    <div class="titulo">
                        <h2>{{Lang::get('miscellaneous.miembros_equipo')}}</h2>
                    </div>

                    <div class="row">
                        @for($i = 1; $i < Lang::get('equipo_bioclimatica.nintegrantes') + 1; $i++)
                            <article class="4u 12u(mobile)" style="">
                                <div class="circular" style="margin: 0 auto">
                                    <img src="
                            <?php $foto = Lang::get('equipo_bioclimatica.deca_' . $i . '.foto');
                                    if ($foto == "")
                                        echo asset("images/ph-user.png");
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
            </section>
        </div>
    </div>
@endsection('content')