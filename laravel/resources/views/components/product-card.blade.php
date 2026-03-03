<div class="card product-card">
    <img src="{{ asset('images/1.jpg') }}" alt="Laptop" style="width: 100%; border-radius: 8px;">
    <h3>{{ $title }}</h3>
    <p>Premium high-performance laptop for designers and developers.</p>
    <a href="/{{ $id }}" style="text-decoration: none;">
        <button style="width: 100%;">View Details</button>
    </a>
</div>

<style>
    .product-card {
        width: 300px;
        transition: transform 0.3s ease;
        text-align: left;
    }

    .product-card:hover {
        transform: translateY(-5px);
    }

    .product-card h3 {
        margin: 15px 0 10px;
        color: #333;
    }

    .product-card p {
        color: #666;
        font-size: 0.9em;
        margin-bottom: 20px;
    }
</style>
