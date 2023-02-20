<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses.index')->with("courses",$courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("courses.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:200',
            'lecturers' => 'nullable|string|max:200',
            'available_seats' => 'required|numeric|min:0'
        ]);

        $course = new Course();
        $course->name = $request->name;
        $course->lecturers = $request->lecturers;
        $course->available_seats = $request->available_seats;
        $course->save();
        return redirect()->route('courses.show', $course->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view("courses.edit")->with("course",$course);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {

        $request->validate([
            'name' => 'required|string|max:200',
            'lecturers' => 'nullable|string|max:200',
            'available_seats' => 'required|numeric|min:0'
        ]);

        $course->name = $request->name;
        $course->lecturers = $request->lecturers;
        $course->available_seats = $request->available_seats;
        $course->save();
        return redirect()->route("courses.show", $course->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route("courses.index");
    }

}