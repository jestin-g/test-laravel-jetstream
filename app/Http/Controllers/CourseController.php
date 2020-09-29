<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //

    public function index()
    {
        $courses = Course::with('user')->withCount('episodes')->get();

        return Inertia::render('Courses/Index', compact('courses'));
    }
}
