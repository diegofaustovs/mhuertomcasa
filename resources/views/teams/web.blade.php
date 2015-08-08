@extends('index')

@section('content')
    <body class="no-sidebar">

    <div id="page-wrapper">


        <div id="header">
            @include('header')
        </div>
        <div class="wrapper style1">
            <div class="titulo">
                <h2>{{Lang::get('equipo_web.equipo')}}</h2>
            </div>
            <section class="carousel">
                <div class="reel">
                    <article>
                        <img class="carousel-img" src="{{asset('images/JuntaACM.png')}}" alt=""/>
                    </article>

                    <article>
                        <img class="carousel-img" src="https://farm4.staticflickr.com/3734/18923752810_84cea66a72_o_d.jpg" alt=""/>
                    </article>

                    <article>
                        <img class="carousel-img" src="https://farm1.staticflickr.com/419/19016968655_2f7d92fc4c_o_d.jpg" alt=""/>
                    </article>

                    <article>
                        <img class="carousel-img" src="https://farm4.staticflickr.com/3936/18252656733_58b94f9804_o_d.jpg" alt=""/>
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
            <section class="container">
                <div class="contenido">
                    <div>
                        <p>{{Lang::get('equipo_web.motivacion')}}</p>
                    </div>

                    <div class="titulo">
                        <h2>{{Lang::get('miscellaneous.miembros_equipo')}}</h2>
                    </div>

                    <div class="row">
                        @for($i = 1; $i < Lang::get('equipo_web.nintegrantes') + 1; $i++)
                            <article class="4u 12u(mobile) special" style="">
                                <div class="circular" style="margin: 0 auto">
                                    <img src="
                                <?php $foto = Lang::get('equipo_web.deca_' . $i . '.foto');
                                    if ($foto == "")
                                        echo asset("images/ph-user.png");
                                    else echo $foto;
                                    ?>
                            ">
                                </div>
                                <p style="text-align: center; margin-top: 1em">{{Lang::get('equipo_web.deca_'.$i.'.nombre')}}
                                    <br>
                                    {{Lang::get('equipo_web.deca_'.$i.'.cargo')}}</p>
                            </article>
                        @endfor
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection('content')