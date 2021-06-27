<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Myinfo;
use App\User;
use App\Review;
use Auth;
use App\Http\Requests\MyinfoRequest;

class MyinfoController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show($myinfo)
    {   

        $myinfos = Myinfo::where('user_id', '=', $myinfo)
                    ->get();
        $user = User::find($myinfo);
        $reviews = Review::where('user_id','=',$myinfo)->paginate(7);
        return view('myinfo.show',compact('myinfos','user','reviews'));
    }
    public function create(User $user)
    {
        return view('myinfo.create',compact('user'));
    }

    public function store(MyinfoRequest $request,User $user,Myinfo $myinfo)
    {
        $myinfo->fill($request->all());
        $myinfo->user_id = $request->user()->id;
        $myinfo->save();
        return redirect()->route('course.index');
    }
    public function edit(User $user,Myinfo $myinfo)
    {
        return view('myinfo.edit',compact('user','myinfo'));
    }
    public function update(MyinfoRequest $request,User $user,Myinfo $myinfo)
    {
        $myinfo->fill($request->all())->save();
        return redirect()->route('course.index');
    }

}
