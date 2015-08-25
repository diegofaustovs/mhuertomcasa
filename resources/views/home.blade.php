﻿@extends('index')

@section('content')
    <body class="homepage">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header">

            <!-- Inner -->
            <div class="inner">
                <image id="logoImg" class="logo" src="../images/logohome3.png"></image>
            </div>

            @include('header')

        </div>

        <section id="infohome" class="wrapper style1 what">
            <div class="contenido container special overlay">
                    <header class="head_main">
                        <h2 class="titulo">{{Lang::get('home.whatTitle')}}</h2>
                    </header>
                    <p class="main_text">

                        {{Lang::get('home.what')}}
                    </p>
                    <footer>
                    </footer>
            </div>
        </section>

        <section id="infohome" class="wrapper style1 who">
            <div class="contenido container special overlay">
                <header class="head_main">
                    <h2 class="titulo">{{Lang::get('home.whoTitle')}}</h2>
                </header>
                <p class="main_text">
                    {{Lang::get('home.who')}}
                </p>
                <footer>
                </footer>
            </div>
        </section>

        <section id="" class="wrapper style1 video_main">
            <div class="contenido container special overlay">
                <header class="head_main">
                    <h2 class="titulo">{{Lang::get('home.media')}}</h2>
                </header>
                <div class="youtube-player" data-id="Us6N7FllxT8">
                </div>
                <br>
                <p class="main_text media_subtext">
                    {!!Lang::get('home.more_media')!!}
                    <script>
                        document.getElementById('media_link').setAttribute('href','{{route('videos')}}')
                    </script>
                </p>
            </div>
        </section>

        <section id="sociales" class="home wrapper style1">
            <div id="redes">
                <header class="head_main">
                    <h2 class="titulo">{{Lang::get('home.s_network')}}</h2>
                </header>
                <a class="twitter-timeline" style="display: initial;" href="https://twitter.com/solarduniandes" data-widget-id="611942708815527940">Tweets {{Lang::get('home.by')}} @solarduniandes</a>
                <div style="margin-left: 2em" class="fb-page" data-href="https://www.facebook.com/mashuertomascasa" data-width="510px" data-height="605px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/mashuertomascasa"><a href="https://www.facebook.com/mashuertomascasa">Solar Decathlon Uniandes 2015:   Más Huerto, Más Casa.</a></blockquote></div></div>
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
                return '<img class="youtube-thumb" src="http://img.youtube.com/vi/'+ id +'/maxresdefault.jpg"><div class="play-button"></div>';
            }

            function labnolIframe() {
                var iframe = document.createElement("iframe");
                iframe.setAttribute("src", "//www.youtube.com/embed/" + this.parentNode.dataset.id + "?vq=hd720&autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
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
