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


    Route::get('training_center/list', [TrainingCenterController::class, 'index']);

    Route::get('aprendice/list', [AprendiceController::class, 'index'])->name('aprendice.list');

    Route::get('computer/list', [ComputerController::class, 'index'])->name('computer.list');

    Route::get('area/list', [AreaController::class, 'index'])->name('area.list');

    Route::get('course/list', [CourseController::class, 'index'])->name('course.list');

    Route::get('teacher/list', [TeacherController::class, 'index'])->name('teacher.list');
    
    
   

