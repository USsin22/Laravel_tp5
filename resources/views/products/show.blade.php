@extends('layout.master')

@section('title', $product['title'])

@section('main')
    <div class="mb-4">
        <a href="{{ route('products.index') }}" class="btn btn-secondary">
            ← Retour aux Produits
        </a>
    </div>

    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('images/' . $product['image']) }}"
                 class="img-fluid rounded"
                 alt="{{ $product['title'] }}">
        </div>

        <div class="col-md-6">
            <h1>{{ $product['title'] }}</h1>
            
            <h3 class="text-success my-3">{{ $product['price'] }}</h3>

            <div class="mb-4">
                <h5>Processeur</h5>
                <p>{{ $product['processor'] }}</p>
            </div>

            <div class="mb-4">
                <h5>Description</h5>
                <p>{{ $product['description'] }}</p>
            </div>

            <button class="btn btn-primary btn-lg">Ajouter au Panier</button>
        </div>
    </div>
@endsection
