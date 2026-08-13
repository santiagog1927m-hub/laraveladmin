@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 700px;">

    <div class="card shadow-sm border-0">


        <div class="card-header bg-success text-white">

            <h4 class="mb-0 fw-bold">
                Formulario Computador
            </h4>

            <small>
                Complete la información del nuevo computador
            </small>

        </div>


        <div class="card-body p-4">

            <form action="{{route('computer.store')}}"
                  method="POST"
                  enctype="multipart/form-data">

            @csrf

            <label>
                <label for="number" class="form-label fw-bold text-success">
                    Número:
                </label>

                <br>

                <input type="number"
                       name="number"
                       id="number"
                       class="form-control"
                       placeholder="Ingrese el número del computador"
                       required>
            </label>

            <br>
            <br>


            <label>
                <label for="brand" class="form-label fw-bold text-success">
                    Marca:
                </label>

                <br>

                <input type="text"
                       name="brand"
                       id="brand"
                       class="form-control"
                       placeholder="Ingrese la marca del computador"
                       required>
            </label>

            <br>
            <br>


            
            <div class="d-flex justify-content-end gap-2">

                <a href="{{ route('computer.list') }}"
                   class="btn btn-secondary">
                    Cancelar
                </a>

                <button type="submit"
                        class="btn btn-success">
                    Guardar Computador
                </button>

            </div>

            </form>

        </div>

    </div>

</div>

@endsection