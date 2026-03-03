@extends('layouts.app')

@section('content')
    <div class="card">
        <h1>Product Details</h1>
        <div style="display: flex; gap: 40px; align-items: flex-start; margin-top: 30px;">
            <img src="{{ asset('images/1.jpg') }}" alt="Laptop"
                style="width: 400px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
            <div>
                <h2 style="color: var(--secondary);">Premium Laptop Model #{{ $id }}</h2>
                <p style="font-size: 1.2em; color: var(--primary); font-weight: bold; margin: 20px 0;">Price:
                    ${{ 1000 + $id * 100 }}</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed
                    erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim.
                    Phasellus molestie magna non est bibendum non venenatis nisl tempor.</p>

                <h3 style="margin-top: 30px;">Specifications:</h3>
                <ul>
                    <li>High-performance Processor</li>
                    <li>16GB RAM / 512GB SSD</li>
                    <li>Retina Display</li>
                    <li>Long-lasting Battery</li>
                </ul>

                <a href="/product" style="text-decoration: none;">
                    <button style="margin-top: 20px;">Back to Gallery</button>
                </a>
            </div>
        </div>
    </div>
@endsection
