<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReviewRequest;
use App\Course;
use App\Review;

class ReviewController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Course $course)
    {
        $reviews = Review::where('course_id', '=', $course->id)
                        ->paginate(7);
        return view('review.index',compact('course','reviews'));
    }
    public function create(Course $course)
    {
        return view('review.create',compact('course'));
    }

    public function store(ReviewRequest $request,Review $review,Course $course)
    {
        $review->fill($request->all());
        $review->course_id = $course->id;
        $review->user_id = $request->user()->id;
        $review->save();
        return redirect()->route('course.show',compact('course'));
    }
    public function destroy(Course $course,Review $review)
    {
        $review->delete();
        return redirect()->route('course.show',compact('course'));
    }
    public function edit(Course $course,Review $review)
    {
        return view('review.edit',compact('course','review'));
    }
    public function update(ReviewRequest $request,Review $review,Course $course)
    {
        $review->fill($request->all())->save();
        return redirect()->route('review.show',compact('course'));
    }

}
