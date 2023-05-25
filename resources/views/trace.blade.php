@extends('page')

@section('title')
    Поиск следов
@endsection

@section('menu_4')
    active
@endsection

@section('main-content')
    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom">Поиск следов присутствия</h2>
        <h4>Раздел сайта для работы с поисковыми делами: создание, загрузка файлов (объектов поиска) и поиск.</h4>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <div><a href="/trace/add" class="btn btn-primary btn-lg fs-4"><i class="bi bi-zoom-in"></i></a></div>
                </div>
                <div>
                    <h3 class="fs-2">Создание</h3>
                    <p>Создание поискового дела и добавление его в базу данных.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <div><a href="/trace/load" class="btn btn-primary btn-lg fs-4"><i class="bi bi-cloud-arrow-up"></i></a></div>
                </div>
                <div>
                    <h3 class="fs-2">Добавить объекты поиска</h3>
                    <p>Загрузка проверяемых файлов и добавление их к делу.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <div><a href="/trace/search" class="btn btn-primary btn-lg fs-4"><i class="bi bi-search"></i></a></div>
                </div>
                <div>
                    <h3 class="fs-2">Поиск</h3>
                    <p>Поиск следов присутствия стеганографического ПО в определенной области диска.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
