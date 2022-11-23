@extends("admin.layout")

@section("content")
    <main>
        <div class="container mt-5 mb-5 admin">
            <section class="admin_pr">
                <p class="title">Добавить продукт</p>

                <form action="{{ route("addProduct") }}" method="post">
                    @csrf

                    <div class="card_product p-4">
                        <label>
                            <div>Описание</div>
                            <textarea class="form-control" name="desc" style="margin-bottom: 0.5rem;"
                                      rows="2"></textarea>
                        </label>
                        <label>
                            <div>Название</div>
                            <input autocomplete="off" name="title" type="text" class="form-control mb-2"/>
                        </label>
                        <label>
                            <div>Код</div>
                            <input autocomplete="off" name="code" type="text" class="form-control mb-2"/>
                        </label>
                        <label>
                            <div>Скидка</div>
                            <input autocomplete="off" placeholder="0 или 1" name="sale" type="text"
                                   class="form-control mb-2"/>
                        </label>
                        <label>
                            <div>Старая цена (если есть)</div>
                            <input autocomplete="off" name="old_price" type="text" class="form-control mb-2" value="1"/>
                        </label>
                        <label>
                            <div>Настоящая цена</div>
                            <input autocomplete="off" name="price" type="text" class="form-control mb-2"/>
                        </label>
                        <label>
                            <div>Категория</div>
                            <select name="category_id" class="form-select">
                                @foreach($categoriesObject as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </label>

                        <button class="btn btn-success mt-4 px-4" type="submit">Добавить</button>
                    </div>
                </form>


                <p class="title">Продукты</p>

                <form action="{{ route("search") }}" method="get" class="my-5" style="display: flex">
                    <input class="form-control" name="searchInput" type="text" placeholder="Поиск..."
                           style="border-radius: 8px;">
                    <button class="btn-gr px-3" type="submit" style="border-radius: 8px;">Найти</button>
                </form>

                <div class="row">
                    @foreach($productObject as $product)
                        <a class="col-lg-4" style="color: black">
                            <div class="col-sm card_product px-3 pt-3">
                                <form action="/admin/product/submit/{{ $product->code }}" method="post">
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
                                    <input name="id" type="text" style="display: none" value="{{ $product->id }}">
                                    <label>
                                        <div>Описание</div>
                                        <textarea class="form-control" name="desc" style="margin-bottom: 0.5rem;"
                                                  rows="10">{{ $product->desc }}</textarea>
                                    </label>
                                    <label>
                                        <div>Название</div>
                                        <input autocomplete="off" name="title" type="text" class="form-control mb-3"
                                               value="{{ $product->title }}"/>
                                    </label>
                                    <label>
                                        <div>Старая цена (если есть)</div>
                                        <input autocomplete="off" name="old_price" type="text" class="form-control mb-3"
                                               value="{{ $product->old_price }}"/>
                                    </label>
                                    <label>
                                        <div>Настоящая цена</div>
                                        <input autocomplete="off" name="price" type="text" class="form-control mb-3"
                                               value="{{ $product->price }}"/>
                                    </label>

                                    @csrf
                                    <button type="submit" class="btn btn-success mb-3">Сохранить</button>
                                </form>
                                <form action="/admin/product/del/{{ $product->code }}" method="post">
                                    @csrf
                                    <input name="id" type="text" style="display: none" value="{{ $product->id }}">
                                    <button type="submit" class="btn btn-danger mb-3">Удалить</button>
                                </form>
                            </div>
                        </a>
                    @endforeach
                </div>
            </section>
        </div>
    </main>
@endsection
