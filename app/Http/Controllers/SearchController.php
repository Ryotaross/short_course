<?php

namespace App\Http\Controllers;

use App\Course;
use App\Hole;
use App\Infomation;
use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;
use App\Http\Requests\InfomationRequest;

class SearchController extends Controller

{
    //
    public function index(Course $course,Infomation $infomation)
    {
        $courses = Course::all()->sortByDesc('created_at');
        $infomations = Infomation::all()->sortByDesc('created_at');
        return view('search.index',compact('courses','infomations'));
    }
    public function store(CourseRequest $courseeRequest,InfomationRequest $infomationRequest,Course $course,Infomation $infomation)
    {
        $course->fill($courseeRequest->all());
        $course->save();
        $infomation->fill($infomationRequest->all());
        $infomation->course_id = $course->id;
        $infomation->save();
        return redirect()->route('search.index');

    }
    public function create()
    {
        return view('search.create');
    }
    public function show(Course $course)
    {
        $infomation = Infomation::where('course_id','=',$course->id)->get();
        return view('search.show',compact('course','infomation'));
    }
    public function update()
    {

    }
    public function destroy()
    {

    }
    public function edit()
    {

    }
}
