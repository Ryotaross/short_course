<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Offer;
use App\Http\Requests\OfferRequest;

class OfferController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $offers = Offer::paginate(15);
        return view('offer.index',compact('offers'));
    }
    public function create(Course $course)
    {
        return view('offer.create',compact('course'));
    }

    public function store(OfferRequest $request,Offer $offer,Course $course)
    {
        $offer->fill($request->all());
        $offer->course_id = $course->id;
        $offer->user_id = $request->user()->id;
        $offer->save();
        return redirect()->route('course.show',compact('course'));
    }
     public function show(Offer $offer)
    {
        return view('offer.show', compact('offer'));
    }    
     public function destroy(Offer $offer)
    {
        $offer->delete();
        return redirect()->route('offer.index');
    }
    
}
