@extends("layout")

@section("content")
    <main>
        <div class="container mt-5">
            <div class="row">
                <h1 class="mb-4">Скидки</h1>
                @foreach($productObject as $product)
                    <a class="col-xs-3 col-md-3" data-saved="false" style="color: black" href="/product/{{ $product->code }}">
                        <div class="col-sm card_product px-3 pt-3">
                            <div class="d-flex" style="justify-content: space-between;">
                                <p class="sale px-3 py-1">Скидка {{ round((($product->old_price - $product->price) / $product->old_price) * 100) }} %</p>
                                <button class="like_btn mb-2">
                                    <i class="bi bi-heart mt-2"></i>
                                </button>
                            </div>
                            <img src="https://miro.medium.com/max/2400/2*Rrb0s3_J2rOpz0hcBnCjrA.jpeg" alt="">
                            <p class="id">Артикул: {{ $product->id }}</p>
                            <p class="name">{{ $product->title }}</p>
                            <div class="d-flex">
                                <del>{{ $product->old_price }} ₽</del>
                                <p class="price">{{ $product->price }} ₽</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </main>
@endsection
