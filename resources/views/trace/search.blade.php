@extends('page')

@section('title')
    Поиск
@endsection

@section('menu_4')
    active
@endsection

@section('main-content')
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Поиск</h1>
                <p class="col-lg-10 fs-4">В данной форме необходимо выбрать поисковое дело. После выбора нажмите кнопку «Поиск».</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" method="post" action="/trace/searched">
                    @csrf
                    <div class="form-floating mb-3">
                        <select name="check_name" id="check_name" class="form-control">
                            <option value="Clotho">Clotho</option>
                        </select>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Поиск</button>
                </form>
            </div>
        </div>
    </div>
@endsection
