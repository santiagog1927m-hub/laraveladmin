<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aprendice;
use App\Models\Computer;
use App\Models\Course;
use App\Models\Training_center;
use App\Models\Teacher;
use App\Models\Area;

class ConsultasController extends Controller
{
    public function consulta(){

        //CONSULTAS APRENDICES

        $apprentice = new Aprendice();//crearme un objeto del tipo de dato a consultar
        $apprentice = Aprendice::find(2);
        return $apprentice->Course;
        //return $apprentice->Computer;

        //CONSULTAS DE CURSO

        //$course = new Course();//crearme un objeto del tipo de dato a consultar
        //$course = Course::find(1);
        //return $course->Apprentices;
        //return $course->Training_Center;
       //return $course->Area;
        //return $course->Teachers;

        //CONSULTAS PROFESORES


        //$teacher = new Teacher();//crearme un objeto del tipo de dato a consultar
        //$teacher = Teacher::find(1);
        //return $teacher->Area;
        //return $teacher->Training_center;
        //return $teacher->Courses;

        //CONSULTAS TRAINING CENTER


        //$tcenter = new TrainingCenter();//crearme un objeto del tipo de dato a consultar
        //$tcenter = TrainingCenter::find(2);
        //return $tcenter->Courses;
        //return $tcenter->Teachers;
        
        


        


        


        

        

        }
}