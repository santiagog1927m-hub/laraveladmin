@extends('layouts.app')

@section('content')
<h1>Actualizar Aprendiz</h1>

<form action="{{ route('aprendice.update', $aprendice) }}" method="POST">

    @csrf
    @method('PUT')

    <label>
        Nombre:
        <br>
        <input type="text" name="nombre" value="{{ old('nombre', $aprendice->nombre) }}">
    </label>

    <br><br>

    <label>
        Email:
        <br>
        <input type="email" name="email" value="{{ old('email', $aprendice->email) }}">
    </label>

    <br><br>

    <label>
        Celular:
        <br>
        <input type="text" name="cell_number" value="{{ old('cell_number', $aprendice->cell_number) }}">
    </label>

    <br><br>

    <label>Curso:</label>
    <br>

    <select name="course_id">
        @foreach ($courses as $course)
            <option value="{{ $course->id }}"
                {{ $aprendice->course_id == $course->id ? 'selected' : '' }}>
                {{ $course->course_number }}
            </option>
        @endforeach
    </select>

    <br><br>

    <label>Computador:</label>
    <br>

    <select name="computer_id">
        @foreach ($computers as $computer)
            <option value="{{ $computer->id }}"
                {{ $aprendice->computer_id == $computer->id ? 'selected' : '' }}>
                {{ $computer->serial_number }}
            </option>
        @endforeach
    </select>

    <br><br>

    <button type="submit" class="btn btn-success">
        Actualizar Aprendiz
    </button>

</form>
@endsection