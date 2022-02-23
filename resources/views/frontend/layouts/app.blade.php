<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="canonical" href="">
    <title></title>
    <link rel="icon" type="image/vnd.microsoft.icon" href="{{asset('frontend/img/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Castoro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP:400,700&display=swap&subset=japanese"
        rel="stylesheet">
    <!-- OGP -->
    <meta property="og:site_name" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:image" content="">

    <link href="{{asset('frontend/css/common.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/css/header.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/css/footer.css')}}" rel="stylesheet" type="text/css" />
    @yield('css')
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet" type="text/css" />

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="{{asset('frontend/js/app.js')}}"></script>

</head>
<body>
    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')
    @yield('js')
</body>
</html>
