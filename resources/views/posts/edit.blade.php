@extends('layout.master')


@section('content')

    <div class="container-fluid p-2">
        <div class="container p-3">
            <form action="{{route('posts.update', $post->id)}}" method="post" class="p-3">
                @method('PUT')
                @csrf

                <input type="text" name="title" value="{{$post->title}}"  class="form-control m-2" placeholder="Enter Title">
                <input type="text" name="content" value="{{$post->content}}" class="form-control m-2" placeholder="Enter Content">
                <button type="submit" class="btn btn-danger m-2">Submit</button>

            </form>
        </div>
    </div>

@endsection
