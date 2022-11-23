@extends("admin.layout")

@section("content")
    <style>
        footer {
            display: none;
        }
    </style>

    <main>
        <div class="container mt-5 mb-5">
            <div class="card_product px-3 pt-3">
                <label>
                    <div>Название сайта</div>
                    <input autocomplete="off" name="title" type="text" class="form-control mb-3"
                           value=""/>
                </label>
            </div>
        </div>
    </main>
@endsection
