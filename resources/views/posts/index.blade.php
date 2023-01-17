@extends('layout.master')


@section('content')

    <div class="container-fluid p-2">
        <a href="posts/create" class="btn btn-success ms-3">Create</a>
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

@endsection
