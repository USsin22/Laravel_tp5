@extends('layout.master')

@section('title', 'Nos Produits')

@section('main')
    <div class="mb-4">
        <h1>Nos Produits</h1>
        <hr>
    </div>

    <div class="row g-4">
        @foreach($products as $product)
            <div class="col-md-4 col-lg-3">
                <x-product-card :product="$product" />
            </div>
        @endforeach
    </div>
@endsection
