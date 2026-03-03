@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-5">
                    <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-4">
                        <h1 class="h2 fw-bold mb-0 text-dark">{{ $film->titre }} <span
                                class="text-muted fs-4">({{ $film->annee }})</span></h1>
                        <a href="/films" class="btn btn-outline-secondary btn-sm">← Back</a>
                    </div>

                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="p-3 bg-light rounded-3 h-100">
                                <p class="text-uppercase text-muted small mb-1 fw-bold">Country</p>
                                <p class="h5 mb-0">{{ $film->pays }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 bg-light rounded-3 h-100">
                                <p class="text-uppercase text-muted small mb-1 fw-bold">Genre</p>
                                <p class="h5 mb-0">{{ $film->genre }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 bg-light rounded-3 h-100">
                                <p class="text-uppercase text-muted small mb-1 fw-bold">Duration</p>
                                <p class="h5 mb-0 text-primary">{{ $film->duree }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 bg-light rounded-3 h-100">
                                <p class="text-uppercase text-muted small mb-1 fw-bold">Status</p>
                                <p class="h5 mb-0 text-success">Available</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 text-center">
                        <a href="/films/{{ $film->id }}/acteurs"
                            class="btn btn-primary px-5 py-3 rounded-pill fw-bold shadow-sm">
                            Voir les acteurs
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
