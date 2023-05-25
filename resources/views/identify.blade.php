@extends('page')

@section('title')
    Идентификация
@endsection

@section('menu_3')
    active
@endsection

@section('main-content')
    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom">Идентификация стеганопрограмм</h2>
        <h4>Раздел сайта для загрузки хэш-значений файлов стеганопрограмм, а также файлов с ключами реестра.</h4>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <div><a href="/identify/file" class="btn btn-primary btn-lg fs-4"><i class="bi bi-box-seam"></i></a></div>
                </div>
                <div>
                    <h3 class="fs-2">Добавить файл</h3>
                    <p>Добавление в БД файлы для хэширования</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <div><a href="/identify/folder" class="btn btn-primary btn-lg fs-4"><i class="bi bi-boxes"></i></a></div>
                </div>
                <div>
                    <h3 class="fs-2">Добавить папку</h3>
                    <p>Добавление в БД папку с файлами для хэширования.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <div><a href="/identify/registry" class="btn btn-primary btn-lg fs-4"><i class="bi bi-file-earmark-bar-graph"></i></a></div>
                </div>
                <div>
                    <h3 class="fs-2">Добавить ключи реестра</h3>
                    <p>Добавление в БД файла с ключами реестра.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
