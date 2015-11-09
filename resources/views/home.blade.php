@extends('index')

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

        <!--<section id="counter" class="wrapper style1 countdown">
            <div class="contenido container special overlay">
                <header class="head_main">
                    <h2 class="titulo">{{Lang::get('home.count_Title')}}</h2>
                </header>
                <div id="contest-timer" >
                    <span class="days"></span> : <span class="hours"></span> : <span class="minutes"></span> : <span class="seconds"></span>
                </div>
                <footer>
                </footer>
            </div>
        </section>-->

        <section id="" class="wrapper style1 video_main">
            <div class="contenido container special overlay">
                <header class="head_main">
                    <h2 class="titulo">{{Lang::get('home.media')}}</h2>
                </header>
                <div class="yt_container">
                    <iframe class="yt_video" src="https://www.youtube.com/embed/qylv6f_mAYE" frameborder="0" allowfullscreen></iframe>
                </div>
                <br>
                <p class="main_text media_subtext">
                    {!!Lang::get('home.more_media')!!}
                </p>
            </div>

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
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <script type="text/javascript">
        var deadline = 'December 1 2015 23:59:59 GMT+05:00';
        initializeClock();

        function getTimeRemaining(endtime){

            var t = Date.parse(endtime) - Date.parse(new Date());
            var seconds = Math.floor( (t/1000) % 60 );
            var minutes = Math.floor( (t/1000/60) % 60 );
            var hours = Math.floor( (t/(1000*60*60)) % 24 );
            var days = Math.floor( t/(1000*60*60*24) );
            return {
                'total': t,
                'days': days,
                'hours': hours,
                'minutes': minutes,
                'seconds': seconds
            };
        }

        function updateClock()
        {
            var t = getTimeRemaining(deadline);
            daysSpan.innerHTML = ('0' + t.days).slice(-2);
            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

            if(t.total<=0){
                clearInterval(timeinterval);
            }

        }

        function initializeClock()
        {
            clock = document.getElementById("contest-timer");

            daysSpan = clock.querySelector('.days');
            hoursSpan = clock.querySelector('.hours');
            minutesSpan = clock.querySelector('.minutes');
            secondsSpan = clock.querySelector('.seconds');

            updateClock();

            var timeinterval = setInterval(updateClock,1000);
        }

    </script>

    </div>
@endsection
