@extends('layout')

@section('content')
    <div class="container my-5">

        <h1>{{ Auth::user()->name }}</h1>
        <h5>{{ Auth::user()->email }}</h5>

        <a class="btn btn-danger mt-3" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Выйти
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

    </div>
@endsection
