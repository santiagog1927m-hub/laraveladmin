@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>CURSOS</h1>
            <a href="{{ route('course.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> NUEVOS CURSOS
            </a>
        </div>

        <table id="idProduct" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Numero de curso</th>
                    <th>Dia</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->course_number }}</td>
                        <td>{{ $course->day }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection