<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Area;
use App\Models\Training_center;

class TeacherController extends Controller
{
    // Muestra qué área da un profesor
    public function consultaArea()
    {
        $profe = Teacher::find(1);
        return $profe->area;
    }

    // Muestra en qué centro se encuentra el profesor
    public function consultaCentro()
    {
        $profe = Teacher::find(1);
        return $profe->training_center;
    }

    public function consultaCurso()
    {
        $profe = Teacher::find(1);
        return $profe->courses;
    }

    public function create()
    {
        $areas = Area::all();
        $training_centers = Training_center::all();

        return view(
            'teacher.create',
            compact('areas', 'training_centers')
        );
    }
    public function store(Request $request)
{
    $teacher = Teacher::create($request->all());

    return response()->json($teacher);

    // ADJUNTAR LA IMAGEN
    $file = $request->file("urlFoto");

    $nombreArchivo = "foto_" . time() . "." . $file->guessExtension();

    $request->file('urlFoto')->storeAs('public/images', $nombreArchivo);

    $teacher->urlFoto = $nombreArchivo;
    $teacher->save();

    return redirect()->route('teacher.list');
}

    public function index()
    {
        $teachers = Teacher::all();

        return response()->json($teachers);

        //return view('teacher.index', compact('teachers'));
    }

    public function show($id)
    {
        $profesor = Teacher::find($id);

        return response()->json($profesor);

        return view('teacher.show', compact('profesor'));
    }

    public function edit(Teacher $teacher)
    {
        $areas = Area::all();
        $training_centers = Training_center::all();

        return view(
            'teacher.edit',
            compact('teacher', 'areas', 'training_centers')
        );
    }

    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update($request->all());

        return response()->json($teacher);

        return redirect()->route('teacher.list');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return response()->json([
        'mensaje' => 'Profesor eliminado correctamente'
    ]);

        return redirect()->route('teacher.list');
    }
}




