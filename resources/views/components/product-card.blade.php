@props(['product'])

<div class="card" style="width: 18rem;">

    <img src="{{ asset('images/' . $product['image']) }}"
         class="card-img-top p-3"
         style="height: 180px; object-fit: contain;"
         alt="{{ $product['title'] }}">


    <div class="card-body">
        <h4 class="card-title">{{ $product['title'] }}</h4>
        <p class="card-text text-success">{{ $product['price'] }}</p>
        <p class="card-text">{{ $product['description'] }}</p>
        <a href="/prodacts/{{ $product['id'] }}" class="btn btn-primary w-100">Voir Info</a>
    </div>
</div>
