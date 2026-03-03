@extends('layouts.app')

@section('content')
    <div class="card">
        <h1>Laptop Selection</h1>
        <p>Premium laptops for a better computing experience.</p>

        <div style="display: flex; gap: 30px; margin-top: 30px; flex-wrap: wrap;">
            <x-product-card title="MacBook Pro" id="1" />
            <x-product-card title="Dell XPS 15" id="2" />
            <x-product-card title="ASUS ROG Zephyrus" id="3" />
        </div>
    </div>
@endsection
