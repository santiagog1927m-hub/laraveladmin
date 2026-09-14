@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="mb-2">Resultados de búsqueda</h1>
        <p class="text-muted mb-4">Resultados para: <strong>{{ $term }}</strong></p>

        @if ($results->isEmpty())
            <div class="alert alert-light border">
                No se encontraron resultados.
            </div>
        @else
            <div class="list-group">
                @foreach ($results as $result)
                    <a href="{{ $result['url'] }}" class="list-group-item list-group-item-action">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-1">{{ $result['title'] }}</h5>
                                <p class="mb-0 text-muted">{{ $result['detail'] }}</p>
                            </div>
                            <span class="badge text-bg-success">{{ $result['type'] }}</span>
                        </div>
                    </a>
                @endforeach
            </div>
        @endif
    </div>
@endsection
