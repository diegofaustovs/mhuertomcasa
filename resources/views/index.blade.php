<!DOCTYPE HTML>
<!--
	Helios by Pixelarity
	pixelarity.com @pixelarity
        License: pixelarity.com/license
    -->
<html>
<head>
    <title>+Huerto +Casa</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <base href="{{url('/')}}"/>
    <link rel="icon" href="{{asset('images/logohome.png')}}">
    <!--[if lte IE 8]><script src="{{ asset('/css/ie/html5shiv.js') }}"></script><![endif]-->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css')  }}" />
    <link rel="stylesheet" href="{{ asset('/css/main.css')  }}" />
    <!--[if lte IE 8]><link rel="stylesheet" href="{{ asset('/css/ie8.css') }}" /><![endif]-->
    <link rel="stylesheet" href="{{ asset('/css/important.css')  }}" />
    <link href='http://fonts.googleapis.com/css?family=Lato:300%7CYanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>
</head>
@yield('content')

<!-- Footer -->
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="12u">

                <!-- Contact -->
                <div class="contact">

                    <ul class="icons">
                        <li><a href="https://twitter.com/solarduniandes" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="https://www.facebook.com/pages/Solar-Decathlon-Uniandes-2015-M%C3%A1s-Huerto-M%C3%A1s-Casa/723414381087541" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="https://instagram.com/solarduniandes/" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="https://plus.google.com/100836447939892247873/" target="_blank" class="icon fa-google-plus"><span class="label">Google +</span></a></li>
                    </ul>
                </div>

                <div class="copyright">

                        <image src="images/andes.png"></image>
                </div>

                <!-- Copyright -->
                <div class="copyright">
                    <ul class="menu">
                        <li>&copy; M&aacute;s Huerto M&aacute;s Casa. {{Lang::get('miscellaneous.derechos_reservados')}}</li>
                    </ul>
                </div>

            </div>

        </div>
    </div>

    <script>
        function changeLang(lang)
        {
            url = window.location.href;
            aux = url.split('/');
            str = "{{route('index')}}";
            str = str.substring(0,str.length - 2);

            if (aux[3] != lang)
            {
                for (i = 3; i < aux.length; i++) {
                    if (aux[i] != 'en' && aux[i] != 'es') {
                        str = str + aux[i];
                    }

                    else {
                        str += (aux[i] == 'en' ? 'es/' : 'en/');
                    }
                }
                window.location = str;
            }
        }
    </script>

    <a onclick="changeLang('es')"><img class="lang_picker" src="{{asset('images/col_flag.png')}}" alt="spanish"></a> /
    <a onclick="changeLang('en')"><img class="lang_picker" src="{{asset('images/uk_flag.png')}}" alt="english"></a>
</div>

<!-- Scripts -->
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="{{ asset('/js/jquery.dropotron.min.js') }}"></script>
<script src="{{ asset('/js/jquery.scrolly.min.js') }}"></script>
<script src="{{ asset('/js/jquery.onvisible.min.js') }}"></script>
<script src="{{ asset('/js/skel.min.js') }}"></script>
<script src="{{ asset('/js/util.js') }}"></script>
<!--[if lte IE 8]><script src="{{ asset('/js/ie/respond.min.js') }}"></script><![endif]-->
<script src="{{ asset('/js/main.js') }}"></script>

<!-- Google Analytics -->

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-66284010-1', 'auto');
    ga('send', 'pageview');

</script>

</body>
</html>