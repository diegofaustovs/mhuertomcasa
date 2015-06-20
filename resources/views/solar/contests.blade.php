
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
                    <h2 class="titulo">{{Lang::get('contests.title')}}</h2>
                    <h3 id="subtitle">{{Lang::get('contests.description')}}</h3>
                </header>

                <div class="contenido">
                    <div class="row">



                        <div class="col-md-3">

                            <div class="green-circle">
                                <i class="fa fa-home fa-inverse fa-2x"></i>
                            </div>

                            <h4 class="patro2">{{ Lang::get('contests.architecture.title') }}</h4>
                        </div>

                        <div class="col-md-3">
                            <div class="green-circle">
                                <i class="fa fa-wrench fa-inverse fa-2x"></i>
                            </div>

                            <h4 class="patro2">{{ Lang::get('contests.eng-const.title') }}</h4>
                        </div>

                        <div class="col-md-3">
                            <div class="green-circle">
                                <i class="fa fa-bolt fa-inverse fa-2x"></i>
                            </div>

                            <h4 class="patro2">{{ Lang::get('contests.energy.title') }}</h4>
                        </div>

                        <div class="col-md-3">

                            <div class="green-circle">
                                <i class="fa fa-plug fa-inverse fa-2x"></i>
                            </div>

                            <h4 class="patro2">{{ Lang::get('contests.energy-consum.title') }}</h4>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-3">

                            <div class="green-circle">
                                <i class="fa fa-plug fa-inverse fa-2x"></i>
                            </div>

                            <h4 class="patro2">{{ Lang::get('contests.comfort.title') }}</h4>
                        </div>

                        <div class="col-md-3">

                            <div class="green-circle">
                                <i class="fa fa-refresh fa-inverse fa-2x"></i>
                            </div>

                            <h4 class="patro2">{{ Lang::get('contests.sustainability.title') }}</h4>
                        </div>

                        <div class="col-md-3">

                            <div class="green-circle">
                                <i class="fa fa-gears fa-inverse fa-2x"></i>
                            </div>

                            <h4 class="patro2">{{ Lang::get('contests.house-func.title') }}</h4>
                        </div>

                        <div class="col-md-3">

                            <div class="green-circle">
                                <i class="fa fa-newspaper-o fa-inverse fa-2x"></i>
                            </div>

                            <h4 class="patro2">{{ Lang::get('contests.marketing.title') }}</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-md-offset-3">

                            <div class="green-circle">
                                <i class="fa fa-globe fa-inverse fa-2x"></i>
                            </div>

                            <h4 class="patro2">{{ Lang::get('contests.urban-design.title') }}</h4>
                        </div>

                        <div class="col-md-3">

                            <div class="green-circle">
                                <i class="fa fa-rocket fa-inverse fa-2x"></i>
                            </div>

                            <h4 class="patro2">{{ Lang::get('contests.innovation.title') }}</h4>
                        </div>

                    </div>

                </div>


            </section>

        </div>

    </div>

@endsection('content')