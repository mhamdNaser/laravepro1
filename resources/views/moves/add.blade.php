@extends('layout.master')


@section('content')

    <h2>create anew post</h2>
    <form action="{{route('moves.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Move Name</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Move Name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Move GENER</label>
            <input type="number" name="gener" class="form-control" id="exampleFormControlInput1" placeholder="Enter Move Gener">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Move Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit">Submit</button>
    </form>

@endsection


