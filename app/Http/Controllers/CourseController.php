<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('user')->withCount('episodes')->get();

        return Inertia::render('Courses/Index', [
            'courses' => $courses
        ]);
    }

    public function show(int $id)
    {
        $course = Course::find($id)->with('episodes')->get();

        return Inertia::render('Courses/Show', [
            'course' => $course
        ]);
    }
}
