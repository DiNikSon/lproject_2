<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
</head>
<body>
<!-- Навигационная панель -->
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <span class="fs-4">Поиск следов стеганографического ПО</span>
        </a>
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link @yield('menu_1')">Главная</a></li>
            <li class="nav-item"><a href="/PO" class="nav-link @yield('menu_2')">Работа с ПО</a></li>
            <li class="nav-item"><a href="/identify" class="nav-link @yield('menu_3')">Идентификация</a></li>
            <li class="nav-item"><a href="/trace" class="nav-link @yield('menu_4')">Поиск следов</a></li>
        </ul>
    </header>
@yield('main-content')
<!--Футер-->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-0 border-top fixed-bottom bg-body">
        <p class="col-md-4 mb-0 text-body-secondary">Попов Владислав У-193</p>

        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="/" class="nav-link px-2 text-body-secondary">На главную</a></li>
            <li class="nav-item"><a href="https://vsuet.ru" class="nav-link px-2 text-body-secondary">Связаться c нами</a></li>
        </ul>
    </footer>
</body>
</html>
