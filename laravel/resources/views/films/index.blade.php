@extends('layouts.app')

@section('content')
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold">🎬 Film Collection</h1>
            <p class="text-muted">Browse our cinematic database</p>
        </div>
    </div>

    <div class="row">
        @forelse($films as $film)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $film->titre }}</h5>
                        <p class="card-text">
                            <span class="badge bg-primary">{{ $film->genre }}</span>
                            <span class="badge bg-secondary">{{ $film->annee }}</span>
                        </p>
                        <ul class="list-unstyled">
                            <li><strong>Country:</strong> {{ $film->pays }}</li>
                            <li><strong>Duration:</strong> {{ $film->duree }}</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-3">
                        <a href="/films/{{ $film->id }}" class="btn btn-dark w-100">Détails</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p>No films found.</p>
            </div>
        @endforelse
    </div>
@endsection
