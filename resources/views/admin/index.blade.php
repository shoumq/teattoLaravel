@extends("admin.layout")

@section("content")
    <style>
        footer {
            display: none;
        }
    </style>

    <main>
        <div class="container mt-5 mb-5 admin_grid">
            <a href="{{ route("adminGeneral") }}" class="admin_grid_el">
                <h3>Общее</h3>
            </a>

            <a href="{{ route("adminCategory") }}" class="admin_grid_el">
                <h3>Категории</h3>
            </a>

            <a href="{{ route("adminVacancy") }}" class="admin_grid_el">
                <h3>Вакансии</h3>
            </a>

            <a href="{{ route("adminAbout") }}" class="admin_grid_el">
                <h3>О нас</h3>
            </a>

            <a href="{{ route("adminNews") }}" class="admin_grid_el">
                <h3>Новости</h3>
            </a>

            <a href="{{ route("adminUsers") }}" class="admin_grid_el">
                <h3>Пользователи</h3>
            </a>
        </div>
    </main>
@endsection
