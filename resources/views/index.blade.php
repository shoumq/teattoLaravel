@extends("layout")

@section("content")
    <main>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-5 text-cmob">
                    <p class="infop mt-3">ОНЛАЙН - МАГАЗИН</p>
                    <p class="logop mt-5">TEATTO</p>
                    <p class="infop-mini">TEATTO - крупнейший магазин чая и кофе в России. Весовой чай и кофе оптом и в
                        розницу от производителя с доставкой по всей России</p>
                    <a data-bs-toggle="modal" data-bs-target="#priceModal" class="green_link px-5 py-2 fs-5"
                       style="position: relative; top: 2rem;">Прайс лист</a>
                </div>
                <div class="col-lg-7">
                    <div class="img_tea_main"></div>
                </div>
            </div>


            <section class="mb-5" style="margin-top: 3rem;">
                <p class="title">Срочные Новости</p>

                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://bitoflife.ru/wp-content/uploads/2018/12/6fd21.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://motea.ru/images/catalog/originals/0001559.jpeg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://motea.ru/images/catalog/originals/0001657.jpeg" alt="">
                        </div>
                    </div>
                    <div class="swiper-scrollbar"></div>
                </div>
            </section>


            <section>
                <p class="title">Товары</p>
                <div class="row">
                    @foreach($productSale as $product)
                        <a class="col-xs-3 col-md-3" style="color: black" data-saved="false"
                           href="/product/{{ $product->code }}">
                            <div class="col-sm card_product px-3 pt-3">
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
            </section>


            <!-- Modal -->
            <div class="modal fade" id="priceModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Получить прайс лист</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="post" action="{{ route('PLSubmit') }}">
                            @csrf
                            <div class="modal-body">
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
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Получить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <form class="sub-form mt-5 mb-5 d-flex input-group w-50" style="margin: auto;">
                <input class="form-control" placeholder="Введите E-mail" aria-label="Введите E-mail"
                       aria-describedby="button-addon2">
                <button class="btn btn-success" type="button" id="button-addon2">Подписаться</button>
            </form>
        </div>
    </main>
@endsection
