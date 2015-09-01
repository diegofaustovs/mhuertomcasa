@extends('index')

@section('content')
    <body class="no-sidebar">

    <div id="page-wrapper">


        <div id="header">
            @include('header')
        </div>
        <div class="wrapper style1">
            <div class="titulo">
                <h2>{{Lang::get('miscellaneous.org_chart')}}</h2>
                <br>
            </div>
            <div style="text-align: center" class="contenido">

                <img style="width: 40%" src="
                    <?php $foto = Lang::get('miscellaneous.org_chart_picture');
                        echo asset($foto);
                     ?>">
            </div>
        </div>
    </div>
@endsection('content')