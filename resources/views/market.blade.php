@extends("layout")

@section("content")
    <main>
        <div class="container mt-5 mb-5">
            <div class="d-flex" style="justify-content: space-between;">
                <p class="title mt-2">{{ $categoryObject->title }}</p>
                <a data-bs-toggle="modal" data-bs-target="#regModal" href="/"
                   class="green_link px-4 py-2 mt-2">Фильтр</a>
            </div>
            <div class="row">
                @foreach($products as $product)
                    <a data-saved="false" class="col-xs-3 col-md-3" style="color: black"
                       href="/product/{{ $product->code }}">
                        <div class="col-sm card_product px-3 pt-3" data-id="{{ $product->id }}">
                            <div class="d-flex" style="justify-content: space-between;">
                                @if($product->sale == 1)
                                    <p class="sale px-3 py-1">
                                        Скидка {{ round((($product->old_price - $product->price) / $product->old_price) * 100) }}
                                        %</p>
                                @else
                                    <p class="px-3 py-1">&nbsp;</p>
                                @endif
                            </div>
                            <img src="https://miro.medium.com/max/2400/2*Rrb0s3_J2rOpz0hcBnCjrA.jpeg" alt="">
                            <p class="id">Артикул: {{ $product->id }}</p>
                            <p class="name">{{ $product->title }}</p>
                            <div class="d-flex">
                                @if($product->sale == 1)
                                    <del>{{ $product->old_price }} ₽</del>
                                    <p class="price">{{ $product->price }} ₽</p>
                                @else
                                    <p class="price_black">{{ $product->price }} ₽</p>
                                @endif
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </main>
@endsection
