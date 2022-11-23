<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEATTO | Admin</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mobile.css') }}">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
</head>

<body>

<style>
    .card_product:hover {
        transform: translateY(0px);
        background: #FBFBFB;
    }
</style>


@include("header")

<div class="header_admin">
    <a href=""></a>
    <a href=""></a>
    <a href=""></a>
</div>

@yield("content")

@include("footer")
<script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('js/swiper.js') }}"></script>
<script src="{{ asset('js/addsaved.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
