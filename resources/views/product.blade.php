@extends("layout")

@section("content")

    <main>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-6">
                    <img src="https://miro.medium.com/max/2400/2*Rrb0s3_J2rOpz0hcBnCjrA.jpeg" style="width: 100%;"
                         alt="">
                </div>
                <div class="col-lg-6 prod">
                    <div>
                        <p class="title mt-5">{{ $productObject->title }}</p>
                        <p class="desc">{{ $productObject->desc }}</p>
                        <p class="id fs-4">Артикул: {{ $productObject->id }}</p>

                        <div class="count_pr">
                            <button id="countPrMin">-</button>
                            <input value="0" id="countPrInput">
                            <button id="countPrPlus">+</button>
                        </div>

                        <div style="width: 150px" class="text-center mt-5">
                            @if($productObject->sale == 1)
                                <p class="sale px-3 py-1">
                                    Скидка {{ round((($productObject->old_price - $productObject->price) / $productObject->old_price) * 100) }}
                                    %</p>
                            @else
                                <p class="px-3"></p>
                            @endif
                        </div>
                        <div class="d-flex">
                            @if($productObject->sale == 1)
                                <del class="fs-4">{{ $productObject->old_price }} ₽</del>
                                <p class="price fs-4">{{ $productObject->price }} ₽</p>
                            @else
                                <p class="price_black fs-4">{{ $productObject->price }} ₽</p>
                            @endif
                        </div>
                        <button data-bs-toggle="modal" data-bs-target="#buyModal" type="submit"
                                class="green_link px-5 fs-4 mt-3">Купить
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="buyModal" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Получить прайс лист</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" action="{{ route('BSubmit') }}">

                        @csrf

                        <div class="modal-body">

                            <input style="display: none" name="product_id" value="{{ $productObject->id }}">
                            <input style="display: none" name="product_title" value="{{ $productObject->title }}">
                            <input style="display: none" name="product_desc" value="{{ $productObject->desc }}">
                            <input style="display: none" name="product_price" value="{{ $productObject->price }}">
                            <input style="display: none" id="product_count" name="product_count" value="">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                                <input name="email" type="email" class="form-control" id="exampleFormControlInput1"
                                       placeholder="name@example.com">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Телефон</label>
                                <input name="phone" type="phone" class="form-control" id="exampleFormControlInput1"
                                       placeholder="+7 (999) 999-99-99">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Адрес</label>
                                <input name="address" class="form-control" id="exampleFormControlInput1"
                                       placeholder="г. Москва, ул. Арбат, 5">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Комментарий</label>
                                <input name="comment" class="form-control" id="exampleFormControlInput1">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Получить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection
