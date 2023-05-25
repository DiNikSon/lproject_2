@extends('page')

@section('title')
    Список ПО
@endsection

@section('menu_2')
    active
@endsection

@section('main-content')
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold text-body-emphasis">Список учтенного ПО</h1>
        <div class="col-lg-9 mx-auto">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Программа</th>
                    <th scope="col">Портабельность</th>
                    <th scope="col">Расширения</th>
                    <th scope="col">Алгоритм</th>
                    <th scope="col">Автор</th>
                    <th scope="col">Год</th>
                    <th scope="col">Шифрование</th>
                    <th scope="col">Система</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Clotho</td>
                    <td>Нет</td>
                    <td>bmp, png, jpg</td>
                    <td>ROTA</td>
                    <td>Иванов И.И.</td>
                    <td>2022</td>
                    <td>DES</td>
                    <td>Windows</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
