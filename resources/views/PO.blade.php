@extends('page')

@section('title')
    Работа с ПО
@endsection

@section('menu_2')
    active
@endsection

@section('main-content')
    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom">Работа со стенографическим ПО</h2>
        <h4>Раздел сайта для работы со стеганопрограммами: добавление, изменение и просмотр.</h4>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <div><a href="/PO/add" class="btn btn-primary btn-lg fs-4"><i class="bi bi-clipboard-plus"></i></a></div>
                </div>
                <div>
                    <h3 class="fs-2">Добавление</h3>
                    <p>Добавить стеганографическую программу в базу данных.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <div><a href="/PO/edit" class="btn btn-primary btn-lg fs-4"><i class="bi bi-clipboard-check"></i></a></div>
                </div>
                <div>
                    <h3 class="fs-2">Редактирование</h3>
                    <p>Редактировать данные о стеганографической программе.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <div><a href="/PO/list" class="btn btn-primary btn-lg fs-4"><i class="bi bi-clipboard-data"></i></a></div>
                </div>
                <div>
                    <h3 class="fs-2">Список</h3>
                    <p>Просмотреть список учтенных стеганографических программ.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
