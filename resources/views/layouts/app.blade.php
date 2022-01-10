<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light mb-4" style="background-color: #0dcaf0;">
            <div class="container-fluid">
                <a class="navbar-brand" href="/" style="color: white">contacts</a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
                <div class="navbar-collapse collapse" id="navbarCollapse" style="">
                    <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                        @auth
                        <li class="nav-item">
                            <a class="navbar-brand" href="/contacts" style="color: white">Создать контакт</a>
                        </li>
                    </ul>
                    <form method="post" action="/logout">
                        @csrf
                        <button type="submit" class="btn btn-outline-light">Выйти</button>
                    </form>
                    @endauth
                    @guest
                    <form action="{{ route('login') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-light">Войти</button>
                    </form>
                    <form action="{{ route('register.handle') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-light ms-2">Зарегистрироваться</button>
                    </form>
                    @endguest
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>