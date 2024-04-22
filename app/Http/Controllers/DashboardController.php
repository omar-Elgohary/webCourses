<?php
namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.home');    
    }

    public function courses()
    {
        return view('dashboard.courses');    
    }

    public function addCourse(Request $request)
    {
        // Validation
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
    
        $course = Course::create($request->all());
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $filename = time() . '_' . $filename;
            $file->move(public_path('image'), $filename);
            $course->image = $filename;
            $course->save();
        }
        return redirect()->back();
    }

    public function editCoursePage(Request $request)
    {
        return view('dashboard.editCoursePage');
    }

    public function editCourse(Request $request)
    {

    }

    public function deleteCourse($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->back();
    }



    public function teachers()
    {
        return view('dashboard.teachers');    
    }

    public function addTeacher(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required',
            'job' => 'required',
            'body' => 'required',
        ]);
    
        $teacher = Teacher::create($request->all());
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $filename = time() . '_' . $filename;
            $file->move(public_path('image'), $filename);
            $teacher->image = $filename;
            $teacher->save();
        }
        return redirect()->back();
    }

    public function information()
    {
        return view('dashboard.information');    
    }
}
