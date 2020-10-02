<?php

namespace App\Http\Controllers;

use App\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
     {
        $this->middleware('auth');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = course::orderBy('id', 'DESC')->get();
        return view('home', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'coursename'=>'required|max:255',
            'teachername'=>'required|max:255',
            'totalhours'=>'required'
        ]);
        $course = new course;
        $course->coursename = $request->coursename;
        $course->teachername = $request->teachername;
        $course->totalhours = $request->totalhours;
        $course->save();
        // return response()->json($course);
        return redirect(route('home.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(course $course, $id)
    {
        $course = course::where('id', $id)->first();
        // return response()->json($course);
        return view('edit', compact('course'));
      
        // return redirect(route('home.index'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'coursename'=>'required|max:255',
            'teachername'=>'required|max:255',
            'totalhours'=>'required'
        ]);
        $course = course::findOrFail($request->id);
        $course->coursename = $request->coursename;
        $course->teachername = $request->teachername;
        $course->totalhours = $request->totalhours;
        $course->save();
        // return response()->json($course);
        return redirect(route('home.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(course $course, $id)
    {
        course::where('id', $id)->delete();
        return redirect()->back();
    }
}
