<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\AprendiceController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;





;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

    // AREAS

    Route::post('area/store', [AreaController::class, 'store'])->name('area.store');

    Route::get('area/list', [AreaController::class, 'index'])->name('area.list');

    Route::get('area/show/{id}', [AreaController::class, 'show'])->name('area.show');

    Route::put('area/{area}', [AreaController::class, 'update']);

    Route::delete('area/{area}', [AreaController::class, 'destroy']);
 
    //COMPUTERS

    Route::post('computer/store', [ComputerController::class, 'store']);

    Route::get('computer/list', [ComputerController::class, 'index']);

    Route::get('computer/show/{id}', [ComputerController::class, 'show']);

    Route::put('computer/{computer}', [ComputerController::class, 'update']);

    Route::delete('computer/{computer}', [ComputerController::class, 'destroy']);

    //TRAINING CENTER

    Route::post('training_center/store', [TrainingCenterController::class, 'store']);

    Route::get('training_center/list', [TrainingCenterController::class, 'index']);

    Route::get('training_center/show/{id}', [TrainingCenterController::class, 'show']);

    Route::put('training_center/{training_center}', [TrainingCenterController::class, 'update']);

    Route::delete('training_center/{training_center}', [TrainingCenterController::class, 'destroy']);

    //APRENDICES

    Route::post('aprendice/store', [AprendiceController::class, 'store']);

    Route::get('aprendice/list', [AprendiceController::class, 'index']);

    Route::get('aprendice/show/{id}', [AprendiceController::class, 'show']);

    Route::put('aprendice/{aprendice}', [AprendiceController::class, 'update']);

    Route::delete('aprendice/{aprendice}', [AprendiceController::class, 'destroy']);

    //CURSOS

    Route::post('course/store', [CourseController::class, 'store']);

    Route::get('course/list', [CourseController::class, 'index']);

    Route::get('course/show/{id}', [CourseController::class, 'show']);

    Route::put('course/{course}', [CourseController::class, 'update']);

    Route::delete('course/{course}', [CourseController::class, 'destroy']);

    //TEACHER

    Route::post('teacher/store', [TeacherController::class, 'store']);

    Route::get('teacher/list', [TeacherController::class, 'index']);

    Route::get('teacher/show/{id}', [TeacherController::class, 'show']);

    Route::put('teacher/{teacher}', [TeacherController::class, 'update']);

    Route::delete('teacher/{teacher}', [TeacherController::class, 'destroy']);
   

