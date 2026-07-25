@extends('layouts.app')

@section('content')
    <h1>AREAS DE FORMACION</h1>

    <div class ="container">
        <table id="idProduct" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <a href="{{ route('areas.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nueva Area
                </a>
                @foreach ($areas as $area)
                    <tr>
                        <br>
                        
                        <td>{{ $area->name }}</td>
                        {{-- <td><a href="{{ route('product.show', $product->id) }}">Mostrar</a></td> --}}

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>


@endsection<