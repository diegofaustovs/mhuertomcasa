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

            <!-- Tweets -->
            <section class="4u 12u(mobile)">
                <header>
                    <h2 class="icon fa-twitter circled"><span class="label">Tweets</span></h2>
                </header>
                <ul class="divided">
                    <li>
                        <article class="tweet">
                            Amet nullam fringilla nibh nulla convallis tique ante sociis accumsan.
                            <span class="timestamp">5 minutes ago</span>
                        </article>
                    </li>
                    <li>
                        <article class="tweet">
                            Hendrerit rutrum quisque.
                            <span class="timestamp">30 minutes ago</span>
                        </article>
                    </li>
                    <li>
                        <article class="tweet">
                            Curabitur donec nulla massa laoreet nibh. Lorem praesent montes.
                            <span class="timestamp">3 hours ago</span>
                        </article>
                    </li>
                    <li>
                        <article class="tweet">
                            Lacus natoque cras rhoncus curae dignissim ultricies. Convallis orci aliquet.
                            <span class="timestamp">5 hours ago</span>
                        </article>
                    </li>
                </ul>
            </section>

            <!-- Posts -->
            <section class="4u 12u(mobile)">
                <header>
                    <h2 class="icon fa-file circled"><span class="label">Posts</span></h2>
                </header>
                <ul class="divided">
                    <li>
                        <article class="post stub">
                            <header>
                                <h3><a href="#">Nisl fermentum integer</a></h3>
                            </header>
                            <span class="timestamp">3 hours ago</span>
                        </article>
                    </li>
                    <li>
                        <article class="post stub">
                            <header>
                                <h3><a href="#">Phasellus portitor lorem</a></h3>
                            </header>
                            <span class="timestamp">6 hours ago</span>
                        </article>
                    </li>
                    <li>
                        <article class="post stub">
                            <header>
                                <h3><a href="#">Magna tempus consequat</a></h3>
                            </header>
                            <span class="timestamp">Yesterday</span>
                        </article>
                    </li>
                    <li>
                        <article class="post stub">
                            <header>
                                <h3><a href="#">Feugiat lorem ipsum</a></h3>
                            </header>
                            <span class="timestamp">2 days ago</span>
                        </article>
                    </li>
                </ul>
            </section>

            <!-- Photos -->
            <section class="4u 12u(mobile)">
                <header>
                    <h2 class="icon fa-camera circled"><span class="label">Photos</span></h2>
                </header>
                <div class="row 25%">
                    <div class="6u">
                        <a href="#" class="image fit"><img src="images/pic10.jpg" alt="" /></a>
                    </div>
                    <div class="6u$">
                        <a href="#" class="image fit"><img src="images/pic11.jpg" alt="" /></a>
                    </div>
                    <div class="6u">
                        <a href="#" class="image fit"><img src="images/pic12.jpg" alt="" /></a>
                    </div>
                    <div class="6u$">
                        <a href="#" class="image fit"><img src="images/pic13.jpg" alt="" /></a>
                    </div>
                    <div class="6u">
                        <a href="#" class="image fit"><img src="images/pic14.jpg" alt="" /></a>
                    </div>
                    <div class="6u$">
                        <a href="#" class="image fit"><img src="images/pic15.jpg" alt="" /></a>
                    </div>
                </div>
            </section>

        </div>
        <hr />
        <div class="row">
            <div class="12u">

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