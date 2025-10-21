<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Course;
class CourseController extends Controller
{

    public function create()
    {
        return view('backend.courses.create');
    }
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'category' => 'required|string|max:255',
            'youtube_link' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'review' => 'nullable|string',
            'lesson' => 'nullable|string',
            'video' => 'nullable|string',
            'quiz' => 'nullable|string',
            'topic' => 'nullable|string',
            'resource' => 'nullable|string',
            'price' => 'nullable|string',
            'old_price' => 'nullable|string',
            'curriculum_title' => 'nullable|string',
            'curriculum_sub_title' => 'nullable|string',
            'video_or_url' => 'nullable|string',
        ]);

        // Here you would typically save the course data to the database
        // For example:
        Course::create($validatedData);

        return redirect()->route('backend.courses.show')->with('success', 'Course created successfully.');

    }
    public function show()
    {
        $courses = Course::all();
        return view('backend.courses.show', compact('courses'));
    }

    public function edit($id)
    {
        $courses = Course::first();
        return view('backend.courses.edit', compact('courses'));
    }
    public function updatepost(Request $request, $id)
    {
            // Validate the request data
        $validatedData = $request->validate([
            'category' => 'required|string|max:255',
            'youtube_link' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'review' => 'nullable|string',
            'lesson' => 'nullable|string',
            'video' => 'nullable|string',
            'quiz' => 'nullable|string',
            'topic' => 'nullable|string',
            'resource' => 'nullable|string',
            'price' => 'nullable|string',
            'old_price' => 'nullable|string',
            'curriculum_title' => 'nullable|string',
            'curriculum_sub_title' => 'nullable|string',
            'video_or_url' => 'nullable|string',
        ]);

        // Here you would typically save the course data to the database
        // For example:
        Course::find($id)->update($validatedData);

        return redirect()->route('backend.courses.show')->with('success', 'Course created successfully.');
    }
    public function delete($id)
    {
        $Courses = Course::findOrFail($id);
        $Courses->delete();
        return redirect()->route('backend.courses.show')->with('success', 'Course post deleted successfully.');
    }


}
