<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use Cloudinary\Cloudinary;

class ComputerController extends Controller
{
    public function consultaAprendiz()
    {
        $compu = Computer::find(3);
        return $compu->aprendices;
    }

    public function create()
    {
        return view('computer.create');
    }

    
public function store(Request $request)
{
    $request->validate([
        'number' => 'required',
        'brand' => 'required|string|max:255',
        'imagen' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
    ]);

    $file = $request->file('imagen');

    $cloudinary = new Cloudinary([
        'cloud' => [
            'cloud_name' => config('services.cloudinary.cloud_name'),
            'api_key' => config('services.cloudinary.api_key'),
            'api_secret' => config('services.cloudinary.api_secret'),
        ],
        'url' => ['secure' => true],
    ]);

    $resultado = $cloudinary->uploadApi()->upload(
        $file->getRealPath(),
        [
            'folder' => 'computers',
            'resource_type' => 'image',
        ]
    );

    $computer = Computer::create([
        'number' => $request->number,
        'brand' => $request->brand,
        'imagen_url' => $resultado['secure_url'],
        'imagen_public_id' => $resultado['public_id'],
    ]);

    return response()->json([
        'message' => 'Computador creado correctamente',
        'data' => $computer,
    ], 201);
}


    public function index()
    {
        $computers = Computer::all();

        return response()->json($computers);

        //return view('computer.index', compact('computers'));
    }

    public function show($id)
    {
        $computer = Computer::find($id);

        return response()->json($computer);

        //return view('computer.show', compact('computer'));
    }

    public function edit(Computer $computer)
    {
        return view('computer.edit', compact('computer'));
    }

    public function update(Request $request, Computer $computer)
    {
        $computer->update($request->all());

        return response()->json($computer);

        return redirect()->route('computer.list');
    }

    public function destroy(Computer $computer)
    {
        $computer->delete();

        return response()->json([
        'mensaje' => 'Computador eliminado correctamente'
    ]);

        return redirect()->route('computer.list');
    }
}
