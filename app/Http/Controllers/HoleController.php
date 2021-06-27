<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Hole;
use App\Infomation;
use App\Http\Requests\CourseRequest;
use App\Http\Requests\InfomationRequest;
use App\Http\Requests\HoleRequest;

class HoleController extends Controller
{
    //
    public function index()
    {
        
    }
    public function create(Course $course)
    {
        return view('hole.create',compact('course'));
    }
    public function store(Course $course,HoleRequest $holeRequest,Hole $hole)
    {
        $hole_info = array_combine($holeRequest['yard'],$holeRequest['par'],);
        $hole_number = 1;
        
        foreach($hole_info as $yard => $par){
            if($par !== null && $yard !== null){
                $hole = new \App\Hole;
                $hole->par = $par;
                $hole->yard = $yard;
                $hole->hole_number = $hole_number;
                $hole->course_id = $course->id;
                $hole->save();
                $hole_number++;
            }
        }
        
        return redirect()->route('course.show',compact('course'));
        
    }
    public function edit(Course $course)
    {
        $holes = Hole::where('course_id','=',$course->id)->get()->sortBy('hole_number');
        return view('hole.edit',compact('course','holes'));
    }
     public function hole_update(Course $course,HoleRequest $holeRequest,Hole $hole)
    {
        \App\Hole::where('course_id','=',$course->id)->delete();

        $hole_info = array_combine($holeRequest['yard'],$holeRequest['par'],);
        $hole_number = 1;
        
        foreach($hole_info as $yard => $par){
            if($par !== null && $yard !== null){
                $hole = new \App\Hole;
                $hole->par = $par;
                $hole->yard = $yard;
                $hole->hole_number = $hole_number;
                $hole->course_id = $course->id;
                $hole->save();
                $hole_number++;
            }
        }
        
        return redirect()->route('course.show',compact('course')); 
    }
}
