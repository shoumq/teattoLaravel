@extends('layout')

@section('content')
    <main>
        <div class="container mt-5 mb-5">
            <div class="row">
                @foreach($categoryAll as $category)
                    <a href="/category/{{ $category->code }}" class="col-lg-4 category">
                        <div class="col-sm">
                            <div class="img_tea"
                                 style="background-image: url(https://teapagoda.ru/upload/iblock/beb/beb92e010599f14cd5decbc6a5d89ee2.jpg)"></div>
                            <p class="title">{{ $category->title }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </main>

@endsection
