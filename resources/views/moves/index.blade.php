@extends('layout.master')


@section('content')

    <a href="moves/create" class="btn btn-success">Create</a>
    <table class="table mt-5">
        <thead class="table-success">
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">GENER</th>
            <th scope="col">DESCRIPTION</th>
            <th scope="col">ACTION</th>
        </thead>
        @foreach ($moves as $move)
            <tr>
                <td>{{$move->id}}</td>
                <td>{{$move->name}}</td>
                <td>{{$move->gener}}</td>
                <td>{{$move->description}}</td>
                <td>
                    <a href=""><i class="material-icons" style="color: black">edit</i></a>
                    <a href=""><i class="material-icons" style="color: black">delete</i></a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
