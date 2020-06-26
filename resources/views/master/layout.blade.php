<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookstan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/Bookstan/public/website/css/style.css">
    <link rel="stylesheet" href="http://localhost/Bookstan/public/icofont.min.css">
    <link rel="shortcut icon" href="http://localhost/Bookstan/public/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="http://localhost/Bookstan/public/favicon/favicon.ico" type="image/x-icon">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ (Route::current()->getName() === 'welcome' ? 'active': '') }}" href="{{route('welcome')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (Route::current()->getName() === 'discover' ? 'active': '') }}" href="{{route("discover")}}">Descubra</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (Route::current()->getName() === 'blog' ? 'active': '') }}" href="{{route("blog")}}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (Route::current()->getName() === 'about' ? 'active': '') }}" href="{{route('about')}}">Sobre nós</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (Route::current()->getName() === 'contact' ? 'active': '') }}" href="{{route("contact")}}">Contato</a>
            </li>
        </ul>
    </div>
</nav>

    @yield('content')

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
<script src="http://localhost/Bookstan/public/website/js/script.js"></script>

@extends('../script')

</body>
</html>
