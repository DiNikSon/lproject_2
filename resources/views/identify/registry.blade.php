@extends('page')

@section('title')
    Добавление файла реестра
@endsection

@section('menu_3')
    active
@endsection

@section('main-content')
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Добавление файла реестра</h1>
                <p class="col-lg-10 fs-4">В данной форме необходимо выбрать стеганографическую программу и загружаемый файл реестра. После выбора нажмите кнопку «Добавить».</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" method="post" action="/identify/registry-add">
                    @csrf
                    <div class="form-floating mb-3">
                        <select name="st_prog_combo" id="st_prog_combo" class="form-control">
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
