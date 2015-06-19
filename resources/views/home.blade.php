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

        <!-- Banner -->
        <section id="banner">
            <header>
                <div>
                    <div class="youtube-container">
                        <div class="youtube-player" data-id="UeudLPSdpdA"></div>
                    </div>
                    {{--<div class="youtube-container">--}}
                        {{--<div class="youtube-player" data-id="PUtkGRQzXVs"></div>--}}
                    {{--</div>--}}

                </div>
            </header>
        </section>

        <!-- Carousel -->
        {{--<section class="carousel">--}}
            {{--<div class="reel">--}}

                {{--<article>--}}
                    {{--<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>--}}
                    {{--<header>--}}
                        {{--<h3><a href="#">Pulvinar sagittis congue</a></h3>--}}
                    {{--</header>--}}
                    {{--<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>--}}
                {{--</article>--}}

                {{--<article>--}}
                    {{--<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>--}}
                    {{--<header>--}}
                        {{--<h3><a href="#">Fermentum sagittis proin</a></h3>--}}
                    {{--</header>--}}
                    {{--<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>--}}
                {{--</article>--}}

                {{--<article>--}}
                    {{--<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>--}}
                    {{--<header>--}}
                        {{--<h3><a href="#">Sed quis rhoncus placerat</a></h3>--}}
                    {{--</header>--}}
                    {{--<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>--}}
                {{--</article>--}}

                {{--<article>--}}
                    {{--<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>--}}
                    {{--<header>--}}
                        {{--<h3><a href="#">Ultrices urna sit lobortis</a></h3>--}}
                    {{--</header>--}}
                    {{--<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>--}}
                {{--</article>--}}

                {{--<article>--}}
                    {{--<a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>--}}
                    {{--<header>--}}
                        {{--<h3><a href="#">Varius magnis sollicitudin</a></h3>--}}
                    {{--</header>--}}
                    {{--<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>--}}
                {{--</article>--}}

                {{--<article>--}}
                    {{--<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>--}}
                    {{--<header>--}}
                        {{--<h3><a href="#">Pulvinar sagittis congue</a></h3>--}}
                    {{--</header>--}}
                    {{--<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>--}}
                {{--</article>--}}

                {{--<article>--}}
                    {{--<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>--}}
                    {{--<header>--}}
                        {{--<h3><a href="#">Fermentum sagittis proin</a></h3>--}}
                    {{--</header>--}}
                    {{--<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>--}}
                {{--</article>--}}

                {{--<article>--}}
                    {{--<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>--}}
                    {{--<header>--}}
                        {{--<h3><a href="#">Sed quis rhoncus placerat</a></h3>--}}
                    {{--</header>--}}
                    {{--<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>--}}
                {{--</article>--}}

                {{--<article>--}}
                    {{--<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>--}}
                    {{--<header>--}}
                        {{--<h3><a href="#">Ultrices urna sit lobortis</a></h3>--}}
                    {{--</header>--}}
                    {{--<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>--}}
                {{--</article>--}}

                {{--<article>--}}
                    {{--<a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>--}}
                    {{--<header>--}}
                        {{--<h3><a href="#">Varius magnis sollicitudin</a></h3>--}}
                    {{--</header>--}}
                    {{--<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>--}}
                {{--</article>--}}

            {{--</div>--}}
        {{--</section>--}}

        <!-- Main -->

        <section id="banner" class="wrapper style1">

            {{--<section id="features" class="container special">--}}

                <article id="main" class="container special">
                    <header>
                        <h2 class="titulo">{{Lang::get('home.whatTitle')}}</h2>
                    </header>
                    <p style="text-align: center">
                        {{Lang::get('home.what')}}
                    </p>
                    <footer>
                        {{--<a href="#" class="button">Continue Reading</a>--}}
                    </footer>
                    {{--<a href="#" class="image featured"><img src="images/pic06.jpg" alt="" /></a>--}}
                </article>
            {{--</section>--}}
        </section>

        <!-- Features -->
        <section id="banner" class="wrapper style1">

            {{--<section id="features" class="container special">--}}
                <header>
                    <h2 class="titulo">{{Lang::get('home.whoTitle')}}</h2>
                </header>
                <div class="row text-center">
                    <p style="text-align: center">
                        {{Lang::get('home.who')}}
                    </p>
                    {{--<article class="4u 12u(mobile) special">--}}
                        {{--<a href="#" class="image featured"><img src="images/pic07.jpg" alt="" /></a>--}}
                        {{--<header>--}}
                            {{--<h3><a href="#">Gravida aliquam penatibus</a></h3>--}}
                        {{--</header>--}}
                    {{--</article>--}}
                    {{--<article class="4u 12u(mobile) special">--}}
                        {{--<a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>--}}
                        {{--<header>--}}
                            {{--<h3><a href="#">Sed quis rhoncus placerat</a></h3>--}}
                        {{--</header>--}}
                    {{--</article>--}}
                    {{--<article class="4u 12u(mobile) special">--}}
                        {{--<a href="#" class="image featured"><img src="images/pic09.jpg" alt="" /></a>--}}
                        {{--<header>--}}
                            {{--<h3><a href="#">Magna laoreet et aliquam</a></h3>--}}
                        {{--</header>--}}
                    {{--</article>--}}
                </div>
            {{--</section>--}}

        </section>
    </div>


    <section id="banner" class="wrapper style1">

            <header style="text-align: center">
                <a class="twitter-timeline" href="https://twitter.com/solarduniandes" data-widget-id="611942708815527940">Tweets {{Lang::get('home.by')}} @solarduniandes</a>
            </header>

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
@endsection
