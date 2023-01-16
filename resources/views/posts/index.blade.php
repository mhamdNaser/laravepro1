<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
<body>
    <div class="container-fluid p-2">
        <div class="container p-3">
            <table class="table table-success table-striped">

                <th>#</th>
                <th>ID</th>
                <th>TITLE</th>
                <th>CONTENT</th>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->content}}</td>
                        <td>
                            <a href="{{route('posts.edit', $post->id)}}"><i class="material-icons" style="color: black">edit</i></a>
                            <a href=""><i class="material-icons" style="color: black">delete</i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
