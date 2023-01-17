@extends('layout.master')


@section('content')

    <h2>create anew post</h2>
    <form action="{{route('moves.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Move Name</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Move Name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Move GENER</label>
            <input type="number" name="gener" class="form-control" id="exampleFormControlInput1" placeholder="Enter Move Gener">
        </div>
        <div class="form-group col-md-4 mb-3">
            <label >Movie Picture</label><br>
            <input type="file" name="movie_pic" class="block w-full text-sm text-gray-500     file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm    file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Move Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit">Submit</button>
    </form>

@endsection


