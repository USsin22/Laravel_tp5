@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow rounded-4 border-0">
                <div class="card-header bg-dark text-white p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="mb-0 fw-bold">🎭 Acteurs de : <span class="text-info">{{ $film->titre }}</span></h2>
                        <a href="/films/{{ $film->id }}" class="btn btn-outline-info btn-sm">← Back to Details</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light py-3">
                                <tr class="text-center">
                                    <th class="text-start ps-5 py-4">Nom de l'Acteur</th>
                                    <th>Role</th>
                                    <th>Type de Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($acteurs as $acteur)
                                    <tr class="text-center">
                                        <td class="text-start ps-5 py-3">
                                            <div class="d-flex align-items-center">
                                                <div class="bg-secondary bg-opacity-10 text-secondary rounded-circle me-3 d-flex align-items-center justify-content-center"
                                                    style="width: 40px; height: 40px;">
                                                    <span
                                                        class="fw-bold">{{ substr($acteur->prenom, 0, 1) }}{{ substr($acteur->nom, 0, 1) }}</span>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 fw-bold text-dark">{{ $acteur->prenom }}
                                                        {{ $acteur->nom }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-3">
                                            <span class="text-muted">{{ $acteur->role }}</span>
                                        </td>
                                        <td class="py-3">
                                            @if ($acteur->typeRole == 'principal')
                                                <span class="badge rounded-pill bg-primary px-3 py-2">principal</span>
                                            @else
                                                <span
                                                    class="badge rounded-pill bg-secondary px-3 py-2 text-white">secondaire</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center py-5 text-muted">No participation found for
                                            this movie.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
