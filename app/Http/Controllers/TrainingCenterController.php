<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training_center;

class TrainingCenterController extends Controller
{
    // consulta de que profesores hay en cada centro
    public function consultaProfesores(){
        $centro = Training_center::find(4);
        return $centro->teachers;
    }
    // consulta, en que centro de formacion se da un curso
    public function consultaCursos(){
        $centro = Training_center::find(1);
        return $centro->courses;
    }



    public function create (){

     return view('training_center.create');
    }

    public function store(Request $request){

    /*$training_center= new Training_center();

    $training->name=$request->name;
    $training->location=$request->location;
    $training->save();*/

    $training_center=Training_center::create($request->all());

    return $training_center;

    }
    public function index(){

    $training_centers = Training_center::all();
    return view('training_center.index',compact('training_centers'));
    }
    public function show($id){
        $centro = Training_center::find($id);
        return view('training_center.show', compact('centro'));
    }



}
