<!-- /**
 * Created by PhpStorm.
 * User: Diego F. Vanegas
 * Date: 14/05/2015
 * Time: 9:14 PM
 */
-->
<!DOCTYPE HTML>
<!--
	Spectral by Pixelarity
	pixelarity.com @pixelarity
        License: pixelarity.com/license
    -->
<html>
<head>
    <title>+Huerto +Casa</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <base href="{{url('/')}}"/>
    <!--[if lte IE 8]><script src="{{ asset('/css/ie/html5shiv.js') }}"></script><![endif]-->
    <link rel="stylesheet" href="{{ asset('/css/style.css')  }}" />
    <!--[if lte IE 9]><link rel="stylesheet" href="{{ asset('/css/ie/v9.css') }}" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="{{ asset('/css/ie/v8.css') }}" /><![endif]-->
</head>
@yield('content')
</html>