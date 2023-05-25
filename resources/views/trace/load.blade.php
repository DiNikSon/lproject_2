@extends('page')

@section('title')
    Добавление файлов
@endsection

@section('menu_4')
    active
@endsection

@section('main-content')
    <div class="px-4 text-center">
        <h1 class="display-5 fw-bold">Добавление объектов поиска</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead">На данной странице вы можете загрузить файлы для поискового дела. Для этого выберите поисковое дело и загрузите папку с файлами (либо снимки реестра или log-файлы), а затем нажмите кнопку «Добавить».</p>
        </div>
    </div>
    <div class="container col-xl-10 col-xxl-8 px-4 mb-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" method="post" action="/trace/load/folder">
                <h4 class="fw-bold text-center">Добавление файлов для поискового дела</h4>
                @csrf
                <div class="form-floating mb-3">
                    <select name="check_name" id="check_name" class="form-control">
                        <option>Clotho</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="file" name="directory[]" webkitdirectory aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Добавить</button>
                </form>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" method="post" action="/trace/load/shot">
                    <h4 class="fw-bold text-center">Добавление снимков реестра или log-файлов</h4>
                @csrf
                <div class="form-floating mb-3">
                    <select name="check_name" id="check_name" class="form-control">
                        <option>Clotho</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="file" name="userfile" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Добавить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
