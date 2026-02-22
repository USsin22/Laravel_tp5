@extends('layout.master')



@section('main')


<table class="table table-bordered table-striped table-hover text-center">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Métier</th>
        </tr>
    </thead>

    <tbody>
        @foreach($users as $s)
            <tr>
                <td>{{ $s['id'] }}</td>
                <td>{{ $s['nom'] }}</td>
                <td>{{ $s['metier'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>




@endsection
@section('title')
Componets



@endsection