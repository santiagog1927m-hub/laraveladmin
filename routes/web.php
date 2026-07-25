<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultasController;

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\AprendiceController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/consultas',[ConsultasController::class, 'consulta_2']);



//AREAS
Route::get('area/create', [AreaController::class, 'create'])->name('areas.create');

Route::post('area/store', [AreaController::class, 'store'])->name('area.store');

Route::get('area/list', [AreaController::class, 'index']);

// COMPUTERS
Route::get('computer/create', [ComputerController::class, 'create'])->name('computer.create');

Route::post('computer/store', [ComputerController::class, 'store'])->name('computer.store');

Route::get('computer/list', [ComputerController::class, 'index']);


// TRAINING CENTERS
Route::get('training_center/create', [TrainingCenterController::class, 'create'])->name('training_center.create');

Route::post('training_center/store', [TrainingCenterController::class, 'store'])->name('training_center.store');

Route::get('training_center/list', [TrainingCenterController::class, 'index']);


// APRENDICES
Route::get('aprendice/create', [AprendiceController::class, 'create'])->name('aprendice.create');

Route::post('aprendice/store', [AprendiceController::class, 'store'])->name('aprendice.store');

Route::get('aprendice/list', [AprendiceController::class, 'index']);


// CURSOS
Route::get('course/create', [CourseController::class, 'create'])->name('course.create');

Route::post('course/store', [CourseController::class, 'store'])->name('course.store');

Route::get('course/list', [CourseController::class, 'index']);


// TEACHERS
Route::get('teacher/create', [TeacherController::class, 'create'])->name('teacher.create');

Route::post('teacher/store', [TeacherController::class, 'store'])->name('teacher.store');

Route::get('teacher/list', [TeacherController::class, 'index']);