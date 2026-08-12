@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Editar Computador</h1>

        <form action="{{ route('computer.update', $computer->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label for="number" class="form-label">
                    Número
                </label>

                <input type="text"
                       name="number"
                       id="number"
                       class="form-control"
                       value="{{ $computer->number }}"
                       required>

            </div>

            <div class="mb-3">

                <label for="brand" class="form-label">
                    Marca
                </label>

                <input type="text"
                       name="brand"
                       id="brand"
                       class="form-control"
                       value="{{ $computer->brand }}"
                       required>

            </div>

            <button type="submit" class="btn btn-success">
                Actualizar
            </button>

            <a href="{{ route('computer.list') }}"
               class="btn btn-secondary">
                Cancelar
            </a>

        </form>

    </div>

@endsection