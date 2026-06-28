<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Courses listing page — all categories with their courses
     */
    public function index(Request $request)
    {
        // All active categories with their active courses eager-loaded
        $categories = CourseCategory::active()
            ->with(['courses' => function ($q) {
                $q->active()->with('modules')->orderBy('sort_order');
            }])
            ->get();

        // Featured courses for the hero highlight strip
        $featured = Course::featured()
            ->with('category')
            ->orderBy('sort_order')
            ->get();

        return view('frontend.courses.index', compact('categories', 'featured'));
    }

    /**
     * Single course detail page
     */
    public function show(string $slug)
    {
        $course = Course::where('slug', $slug)
            ->where('is_active', true)
            ->with(['category', 'modules'])
            ->firstOrFail();

        // Related courses from same category (excluding current)
        $related = Course::active()
            ->where('category_id', $course->category_id)
            ->where('id', '!=', $course->id)
            ->orderBy('sort_order')
            ->limit(4)
            ->get();

        return view('frontend.courses.show', compact('course', 'related'));
    }
}
