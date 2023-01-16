<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .text-shadow
        {
            text-shadow: 1px 2px 4px gray;
        }

    </style>
    <title>@yield('title')</title>
</head>
<body class="antialiased">
    @include('layout.header')
    <div class="container p-5 mt-5 justify-content-center g-2 border  rounded-3">
        <div class="row justify-content-center bg-white g-2 border rounded-3 p-5">
            @section('header-title')
                <h1 class="text-center text-dark fw-bolder">MUHAMMED NASSER</h1>
            @show
            @yield('content')
            @yield('array')
        </div>
    </div>
</body>
</html>
