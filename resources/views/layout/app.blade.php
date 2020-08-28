<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="author" content="Nazmul Huda">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" >
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" >
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet" >
    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet" >
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/baguetteBox.min.css')}}" rel="stylesheet">
</head>
<body>

@include('layout.menu')


@yield('content')


@include('layout.footer')
<script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/axios.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/baguetteBox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
</body>
</html>