@extends('index')

@section('content')
    <body class="homepage">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header">

            <!-- Inner -->
            <div class="inner">
                <image class="logo" src="../images/logohome.png"></image>
                <footer>
                    <a href="#banner"><i class="logo fa fa-angle-down fa-5x"></i></a>
                </footer>

            </div>


            @include('header')

        </div>

        <section id="banner" class="banner">
            <header>
                <div class="contenido container special">
                    <div class="youtube-container">
                        <div class="youtube-player" data-id="UeudLPSdpdA"></div>
                    </div>
                    {{--<div class="youtube-container">--}}
                    {{--<div class="youtube-player" data-id="PUtkGRQzXVs"></div>--}}
                    {{--</div>--}}

                </div>
            </header>
        </section>

        <section id="what" class="wrapper style1">
            <div class="contenido container special">
                <header>
                    <h2 class="titulo">{{Lang::get('home.whatTitle')}}</h2>
                </header>
                <p style="text-align: center">
                    {{Lang::get('home.what')}}
                </p>
                <footer>
                </footer>
            </div>
        </section>

        <section id="who" class="wrapper style1">
            <div class="contenido container special">
                <header>
                    <h2 class="titulo">{{Lang::get('home.whoTitle')}}</h2>
                </header>
                <p style="text-align: center">
                    {{Lang::get('home.who')}}
                </p>
                <footer>
                </footer>
            </div>
        </section>


        <section id="sociales" class="home wrapper style1">
            <div id="redes">
                <header>
                    <h2 class="titulo">Redes sociales</h2>
                </header>
                <a class="twitter-timeline" href="https://twitter.com/solarduniandes" data-widget-id="611942708815527940">Tweets {{Lang::get('home.by')}} @solarduniandes</a>
                <div class="fb-page" data-href="https://www.facebook.com/mashuertomascasa" data-width="510px" data-height="605px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/mashuertomascasa"><a href="https://www.facebook.com/mashuertomascasa">Solar Decathlon Uniandes 2015:   Más Huerto, Más Casa.</a></blockquote></div></div>            </header>
            </div>
        </section>


        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        <script>
            (function() {
                var v = document.getElementsByClassName("youtube-player");
                for (var n = 0; n < v.length; n++) {
                    var p = document.createElement("div");
                    p.innerHTML = labnolThumb(v[n].dataset.id);
                    p.onclick = labnolIframe;
                    v[n].appendChild(p);
                }
            })();

            function labnolThumb(id) {
                return '<img class="youtube-thumb" src="http://img.youtube.com/vi/'+ id +'/0.jpg"><div class="play-button"></div>';
            }

            function labnolIframe() {
                var iframe = document.createElement("iframe");
                iframe.setAttribute("src", "//www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
                iframe.setAttribute("frameborder", "0");
                iframe.setAttribute("id", "youtube-iframe");
                this.parentNode.replaceChild(iframe, this);
            }
        </script>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
    </div>
@endsection
