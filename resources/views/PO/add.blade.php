@extends('page')

@section('title')
    Добавление ПО
@endsection

@section('menu_2')
    active
@endsection

@section('main-content')
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Добавление стеганопрограммы</h1>
                <p class="col-lg-10 fs-4">В данной форме необходимо указать данные стеганографической программы. После заполнения нажмите кнопку «Добавить».</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" method="post" action="/PO/added">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="st_name" name="st_name" placeholder="Название">
                        <label for="floatingInput">Название программы</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="vid_st" id="vid_st" class="form-control">
                            <option value="1">Вид стеганографии:  DIGITAL</option>
                            <option value="2">Вид стеганографии:  STRUCTURAL</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="ras" id="ras" placeholder="Название">
                        <label for="floatingInput">Типы контейнеров</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="alg" id="alg" placeholder="Название">
                        <label for="floatingInput">Алгоритм стегановложения</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="god" id="god" placeholder="Название">
                        <label for="floatingInput">Год создания</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="author" id="author" placeholder="Название">
                        <label for="floatingInput">Автор</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="shifr" id="shifr" placeholder="Название">
                        <label for="floatingInput">Алгоритмы шифрования</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="os" id="os" placeholder="Название">
                        <label for="floatingInput">ОС</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="check" id="check">
                        <label class="form-check-label" for="flexCheckDefault">
                            Необходима установка
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Добавить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
