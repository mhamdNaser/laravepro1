<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <style>

    </style>
    <title>@yield('title')</title>
</head>
<body class="antialiased">
    <div class="container p-5 mt-5 justify-content-center bg-success g-2 border border-success rounded-3">
        <div class="row justify-content-center bg-white g-2 border border-success rounded-3 p-5">
            @section('header-title')
                <h1 class="text-center">MUHAMMED NASSER</h1>
            @show
        </div>
    </div>
    <div class="container p-5 mt-5 justify-content-center bg-success g-2 border border-success rounded-3">
        <div class="row justify-content-center bg-white g-2 border border-success rounded-3 p-5">
            @yield('content')
            <div class="col-5">
                <a name="" id="" class="btn btn-primary btn-lg" href="/" role="button">Home</a>
                <a name="" id="" class="btn btn-primary btn-lg" href="/user" role="button">User</a>
                <a name="" id="" class="btn btn-primary btn-lg" href="/profile" role="button">Profile</a>
                <a name="" id="" class="btn btn-primary btn-lg" href="/about" role="button">About</a>
                <a name="" id="" class="btn btn-primary btn-lg" href="/contact" role="button">Contact</a>
            </div>
        </div>
    </div>
    <div class="container p-5 mt-5 justify-content-center bg-success g-2 border border-success rounded-3">
        <div class="row justify-content-center bg-white g-2 border border-success rounded-3 p-5">
            <div class="col-5 text-center">
                <ul class="list-group">
                    @foreach ($array as $arr)
                        <li class="list-group-item">{{ $arr }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
