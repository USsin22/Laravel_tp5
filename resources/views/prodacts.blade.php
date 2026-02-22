@extends('layout.master')
@section('main')
    <div class="d-flex flex-wrap gap-3">
        @foreach($products as $product)
            <x-product-card :product="$product" />
        @endforeach
    </div>



@endsection
@section('title')
Proudacts
@endsection


