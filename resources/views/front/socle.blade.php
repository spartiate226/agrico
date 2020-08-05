<html>
<head>
    <title></title>
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font/css/font-awesome.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/template/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/template/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/template/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/template/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/template/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/template/style.css')}}" type="text/css">
</head>
<body>
@include('front.composants.header')
@yield('front-content')
@include('front.composants.footer')
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>

<script src="{{asset('js/template/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('js/template/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/template/jquery.slicknav.js')}}"></script>
<script src="{{asset('js/template/mixitup.min.js')}}"></script>
<script src="{{asset('js/template/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/template/main.js')}}"></script>
</body>
</html>
