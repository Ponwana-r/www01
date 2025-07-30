@extends('demo.layout')
@section('content')
<h1>Demo</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">detail</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($demos as $item)
        <tr>
            <th scope="row"> {{ $item->id }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->detail }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection