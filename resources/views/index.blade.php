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
    <link rel="icon" type="image/png" href="{{asset('images/logomhmc.png')}}">
    <!--[if lte IE 8]><script src="{{ asset('/css/ie/html5shiv.js') }}"></script><![endif]-->
    <link rel="stylesheet" href="{{ asset('/css/main.css')  }}" />
    <!--[if lte IE 8]><link rel="stylesheet" href="{{ asset('/css/ie8.css') }}" /><![endif]-->
    <link rel="stylesheet" href="{{ asset('/css/important.css')  }}" />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,900|Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>
</head>
@yield('content')

<!-- Footer -->
<div id="footer">
    <div class="container">
        <div class="row">

                <!-- Contact -->
                <section class="contact">
                    <header>
                        <h3>Nisl turpis nascetur interdum?</h3>
                    </header>
                    <p>Urna nisl non quis interdum mus ornare ridiculus egestas ridiculus lobortis vivamus tempor aliquet.</p>
                    <ul class="icons">
                        <li><a href="https://twitter.com/solarduniandes" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="https://www.facebook.com/pages/Solar-Decathlon-Uniandes-2015-M%C3%A1s-Huerto-M%C3%A1s-Casa/723414381087541" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="https://instagram.com/solarduniandes/" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="https://plus.google.com/100836447939892247873/" target="_blank" class="icon fa-google-plus"><span class="label">Google +</span></a></li>
                    </ul>
                </section>

                <!-- Copyright -->
                <div class="copyright">
                    <ul class="menu">
                        <li>&copy; Untitled. All rights reserved.</li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</div>

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

</body>
</html>