@extends('page')

@section('title')
    Создание поискового дела
@endsection

@section('menu_4')
    active
@endsection

@section('main-content')
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Создание поискового дела</h1>
                <p class="col-lg-10 fs-4">В данной форме необходимо указать название поискового дела. После заполнения нажмите кнопку «Добавить».</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" method="post" action="/trace/added">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="check_name" name="check_name" placeholder="Название">
                        <label for="floatingInput">Название поискового дела</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Добавить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
