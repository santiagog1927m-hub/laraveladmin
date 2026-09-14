<?php

namespace App\Http\Controllers;

use App\Models\Aprendice;
use App\Models\Area;
use App\Models\Computer;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Training_center;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SearchController extends Controller
{
    /**
     * Busca una palabra en los registros principales del sistema.
     */
    public function index(Request $request): View
    {
        $data = $request->validate([
            'q' => ['required', 'string', 'max:100'],
        ]);

        $term = trim($data['q']);
        $like = "%{$term}%";

        $results = collect([
            [
                'type' => 'Aprendiz',
                'route' => 'aprendice.show',
                'records' => Aprendice::where('name', 'like', $like)
                    ->orWhere('email', 'like', $like)->limit(10)->get(),
                'title' => fn (Aprendice $aprendice) => $aprendice->name,
                'detail' => fn (Aprendice $aprendice) => $aprendice->email,
            ],
            [
                'type' => 'Instructor',
                'route' => 'teacher.show',
                'records' => Teacher::where('name', 'like', $like)
                    ->orWhere('email', 'like', $like)->limit(10)->get(),
                'title' => fn (Teacher $teacher) => $teacher->name,
                'detail' => fn (Teacher $teacher) => $teacher->email,
            ],
            [
                'type' => 'Curso',
                'route' => 'course.show',
                'records' => Course::where('course_number', 'like', $like)
                    ->orWhere('day', 'like', $like)->limit(10)->get(),
                'title' => fn (Course $course) => "Curso {$course->course_number}",
                'detail' => fn (Course $course) => "Día: {$course->day}",
            ],
            [
                'type' => 'Área',
                'route' => 'area.show',
                'records' => Area::where('name', 'like', $like)->limit(10)->get(),
                'title' => fn (Area $area) => $area->name,
                'detail' => fn () => 'Área de formación',
            ],
            [
                'type' => 'Centro de formación',
                'route' => 'training_center.show',
                'records' => Training_center::where('name', 'like', $like)
                    ->orWhere('location', 'like', $like)->limit(10)->get(),
                'title' => fn (Training_center $center) => $center->name,
                'detail' => fn (Training_center $center) => $center->location,
            ],
            [
                'type' => 'Computador',
                'route' => 'computer.show',
                'records' => Computer::where('number', 'like', $like)
                    ->orWhere('brand', 'like', $like)->limit(10)->get(),
                'title' => fn (Computer $computer) => "Computador {$computer->number}",
                'detail' => fn (Computer $computer) => $computer->brand,
            ],
        ])->flatMap(function (array $group) {
            return $group['records']->map(fn ($record) => [
                'type' => $group['type'],
                'title' => ($group['title'])($record),
                'detail' => ($group['detail'])($record),
                'url' => route($group['route'], $record->id),
            ]);
        })->values();

        return view('search.index', compact('term', 'results'));
    }
}
