<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="/img/fav-icon.png" type="image/x-icon" />

    <title>{{ $page->title ?? 'PT. Antar Nusa Raya Ekspress — Logistik, Kargo & Kurir' }}</title>

    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/revolution/css/settings.css" rel="stylesheet">
    <link href="/vendors/revolution/css/layers.css" rel="stylesheet">
    <link href="/vendors/revolution/css/navigation.css" rel="stylesheet">
    <link href="/vendors/animate-css/animate.css" rel="stylesheet">
    <link href="/vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/vendors/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!--================Header Area =================-->
    {{-- Ini akan menjadi tempat untuk file header yang dipisahkan --}}
    @include('_partials.header')
    <!--================End Header Area =================-->

    <!-- Konten unik setiap halaman akan dirender di sini -->
    @yield('body')

    <!--================Footer Area =================-->
    {{-- Ini akan menjadi tempat untuk file footer yang dipisahkan --}}
    @include('_partials.footer')
    <!--================End Footer Area =================-->

    <!-- Link JavaScript dari template asli, perhatikan path yang dimulai dengan '/' -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="/js/jquery-2.2.4.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/vendors/jvectormap/jvectormap.min.js"></script>
    <script src="/vendors/jvectormap/jvectormap-worldmill.js"></script>
    <script src="/js/locations.js"></script>
    <script src="/js/validate.js"></script>
    <script src="/js/subscribe.js"></script>
    <script src="/js/contact.js"></script>
    <script src="/js/script.js"></script>
</body>
</html>
