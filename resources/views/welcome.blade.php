@extends('layout.master')

@section('title', 'Welcome')

@section('content')
    <h2 class="col-12 text-dark text-center m-3 text-shadow">This Is Land Page</h2>
@endsection

@section('array')
    <div class="container p-5 mt-5 justify-content-center g-2">
        <div class="row justify-content-center bg-white g-2 ">
            <div class="col-5 text-center">
                <ul class="list-group">
                    @foreach ($array1 as $arr)
                        <li class="list-group-item">{{ $arr }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection


