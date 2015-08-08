@extends('index')

@section('content')
    <body class="no-sidebar">

    <div id="page-wrapper">


        <div id="header">
            @include('header')
        </div>
        <div class="wrapper style1">
            <section class="container special">
                <div class="titulo">
                    <h2>{{Lang::get('solar_decathlon.about_competition')}}</h2>
                </div>
                <div class="contenido">
                    <div>
                        <p>{!!Lang::get('solar_decathlon.competition')!!}
                    </div>
                </div>
                <div class="contenido">
                    <div class="youtube-container">
                        <div class="youtube-player" data-id="UIUbMWJCeQw"></div>
                    </div>
                </div>
            </section>
        </div>
    </div>
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
@endsection('content')