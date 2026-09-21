<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training_center;

class TrainingCenterController extends Controller
{
    // Consulta de qué profesores hay en cada centro
    public function consultaProfesores()
    {
        $centro = Training_center::find(4);

        return $centro->teachers;
    }

    // Consulta en qué centro de formación se da un curso
    public function consultaCursos()
    {
        $centro = Training_center::find(1);

        return $centro->courses;
    }

    // Mostrar formulario para crear
    public function create()
    {
        return view('training_center.create');
    }

    // Guardar centro de formación
    public function store(Request $request)
    {
        $training_center = Training_center::create($request->all());

        return response()->json($training_center);

        //return redirect()->route('training_center.list');
    }

    // Mostrar todos los centros
    public function index()
    {
        $training_centers = Training_center::all();

        return response()->json($training_centers);

        //return view('training_center.index', compact('training_centers'));
    }

    // Mostrar un centro específico
    public function show($id)
    {
        $centro = Training_center::find($id);

        return response()->json($centro);

        //return view('training_center.show', compact('centro'));
    }

    // Mostrar formulario para editar
    public function edit(Training_center $training_center)
    {
        return view('training_center.edit', compact('training_center'));
    }

    // Actualizar centro
    public function update(Request $request, Training_center $training_center)
    {
        $training_center->update($request->all());

        return response()->json($training_center);

        return redirect()->route('training_center.list');
    }

    // Eliminar centro
    public function destroy(Training_center $training_center)
    {
        $training_center->delete();
        
        return response()->json([
        'mensaje' => 'Centro de formación eliminado correctamente'
    ]);
        return redirect()->route('training_center.list');
    }
}