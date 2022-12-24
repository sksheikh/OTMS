<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseSubCategory;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public $course,$subCategories;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.course.index',[
           'courses'=>Course::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create',[
            'courseCategories'=>CourseCategory::where('status',1)->get(),
            'courseSubCategories'=>CourseSubCategory::where('status',1)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Course::createOrUpdateCourse($request);
        return redirect()->back()->with('success','Created course successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.course.edit',[
            'course'=>Course::find($id),
            'courseCategory'=>CourseCategory::where('status',1)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Course::createOrUpdateCourse($request,$id);
        return redirect()->route('courses.index')->with('success','Updated course successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->course = Course::find($id);
        if(isset($this->course->image))
        {
            if(file_exists($this->course->image)){
                unlink($this->course->image);
            }
        }
        $this->course->delete();
        return redirect()->back()->with('success','Course deleted successfully');
    }

    public function getSubCategory(Request $request)
    {
        $this->subCategories = CourseSubCategory::where('category_id',$request->category_id)->get('id','name');
        return response()->json($this->subCategories);

    }
}
