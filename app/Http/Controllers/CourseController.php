<?php

namespace App\Http\Controllers;

use App\Course;
use App\Hole;
use App\Infomation;
use App\Review;
use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;
use App\Http\Requests\InfomationRequest;
use App\Http\Requests\HoleRequest;


class CourseController extends Controller
{
    //
    
    public function index(Course $course,Request $request)
    {
        $word = $request->input('word');
        $pref = $request->input('pref');
        if(empty($word) && empty($pref)){
            $courses = Course::paginate(15);
        }elseif(!empty($word) && empty($pref)){
            $courses = Course::where('name', 'LIKE', "%{$word}%")
                ->orWhere('address', 'LIKE', "%{$word}%")
                ->paginate(15);
        }else{
            $courses = Course::where('area', 'LIKE', "%{$pref}%")
                    ->paginate(15);
        }
        return view('search.index',compact('courses'));
    }
    public function store(CourseRequest $courseeRequest,Course $course)
    {
        $course->fill($courseeRequest->all());
        $image_path = $courseeRequest->file('img')->store('public/avatar/');
        $course->img = basename($image_path);
        $course->save();
        return redirect()->route('course.index');
    }
    public function create()
    {
        return view('search.create');
    }
    public function show(Course $course)
    {
        $holes = Hole::where('course_id','=',$course->id)->get()->sortBy('hole_number');
        $reviews = Review::where('course_id','=',$course->id)->paginate(3);
        return view('search.show',compact('course','holes','reviews'));
    }
    public function update(CourseRequest $courseeRequest,Course $course,Infomation $infomation)
    { 
        $course->fill($courseeRequest->all())->save();
        return redirect()->route('course.show',compact('course'));
        
    }
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('course.index');
    }
    public function edit(Course $course)
    {
        return view('search.edit',compact('course'));
    }
    public function hole_create(Course $course)
    {
        return view('hole.create',compact('course'));
    }
    public function hole_store(Course $course,HoleRequest $holeRequest,Hole $hole)
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
    public function hole_edit(Course $course)
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
    public function like(Request $request, Course $course)
    {
        $course->likes()->detach($request->user()->id);
        $course->likes()->attach($request->user()->id);

        return [
            'id' => $course->id,
            'countLikes' => $course->count_likes,
        ];
    }

    public function unlike(Request $request, Course $course)
    {
        $course->likes()->detach($request->user()->id);

        return [
            'id' => $course->id,
            'countLikes' => $course->count_likes,
        ];
    }
    public function went(Request $request, Course $course)
    {
        $course->wents()->detach($request->user()->id);
        $course->wents()->attach($request->user()->id);

        return [
            'id' => $course->id,
            'countWents' => $course->count_wents,
        ];
    }

    public function unwent(Request $request, Course $course)
    {
        $course->wents()->detach($request->user()->id);

        return [
            'id' => $course->id,
            'countWents' => $course->count_wents,
        ];
    }
}

