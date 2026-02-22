@extends('layout.master')

@section('title')
    Info - {{ $product['title'] }}
@endsection

@section('main')

<div class="container mt-4 d-flex justify-content-center">
    <div class="card" style="width: 22rem;">
        <img src="{{ asset('images/' . $product['image']) }}" class="card-img-top" alt="{{ $product['title'] }}" style="height: 200px; object-fit: contain;">
        <div class="card-body">
            <h5 class="card-title">{{ $product['title'] }}</h5>
            <p class="card-text"><strong>Processeur :</strong> {{ $product['price'] }}</p>
            <p class="card-text"><strong>Description :</strong> {{ $product['description'] }}</p>
            <a href="/prodacts" class="btn btn-secondary">Retour</a>
        </div>
    </div>
</div>

@endsection
