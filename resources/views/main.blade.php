@extends('page')

@section('title')
    Главная страница
@endsection

@section('menu_1')
    active
@endsection

@section('main-content')
    <div class="container px-4 py-5" id="featured-3">
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="feature col">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                    <i class="bi bi-clipboard-data"></i>
                </div>
                <h3 class="fs-2">Стеганографическое ПО</h3>
                <p>Раздел сайта для работы со стеганопрограммами: добавление, изменение и просмотр.</p>
                <a href="/PO" class="icon-link">
                    Работа с ПО
                </a>
            </div>
            <div class="feature col">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                    <i class="bi bi-box-seam"></i>
                </div>
                <h3 class="fs-2">Идентификация стеганопрограмм</h3>
                <p>Раздел сайта для загрузки файлов хэш-значений стеганопрограмм, а также файлов с ключами реестра.</p>
                <a href="/identify" class="icon-link">
                    Идентификация
                </a>
            </div>
            <div class="feature col">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                    <i class="bi bi-search"></i>
                </div>
                <h3 class="fs-2">Поиск следов присутствия</h3>
                <p>Раздел для создания поискового дела, добавления в него файлов и поиска следов присутствия.</p>
                <a href="/trace" class="icon-link">
                    Поиск следов
                </a>
            </div>
        </div>
    </div>
@endsection
