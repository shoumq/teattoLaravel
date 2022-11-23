<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEATTO</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mobile.css') }}">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
</head>

<body>
@include("header")
@yield("content")
<div class="modal fade" id="regModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Регистрация</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Имя</label>
                        <input class="form-control" id="exampleFormControlInput1" placeholder="Иван">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Фамилия</label>
                        <input class="form-control" id="exampleFormControlInput1" placeholder="Иванов">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                               placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Телефон</label>
                        <input type="phonr" class="form-control" id="exampleFormControlInput1"
                               placeholder="+7 (999) 999-99-99">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div data-bs-toggle="modal" data-bs-target="#loginModal" class="form-text"
                         style="cursor: pointer;">Уже есть аккаунт?
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Зарегистрироваться</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Вход</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="card-header">{{ __('Dashboard') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{ __('You are logged in!') }}
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                               placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div data-bs-toggle="modal" data-bs-target="#regModal" class="form-text"
                         style="cursor: pointer;">Еще нет аккаунта?
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Войти</button>
                </div>
            </form>
        </div>
    </div>
</div>
@include("footer")
<script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('js/swiper.js') }}"></script>
<script src="{{ asset('js/addsaved.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
