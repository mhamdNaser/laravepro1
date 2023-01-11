@extends('layout.master')

@section('title', 'User')

@section('content')
    <main class="container text-center">
        <h2>This User Page</h2>
    </main>
@endsection


@section('array')
    <div class="container p-5 mt-5 justify-content-center g-2">
        <div class="row justify-content-center bg-white g-2 ">
            <div class="col-5 text-center">
                <ul class="list-group">
                    @foreach ($array as $arr)
                        <li class="list-group-item">{{ $arr }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <pre>
        @php
             print_r($array);
        @endphp
    </pre>
@endsection
