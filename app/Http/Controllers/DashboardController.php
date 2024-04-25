<?php
namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\PurchaseRequest;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.home');
    }

    public function courses()
    {
        $courses = Course::all();
        return view('dashboard.courses', compact('courses'));
    }

    public function addCourse(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'line_one' => 'required|string',
            'line_two' => 'required|string',
            'line_three' => 'required|string',
            'line_four' => 'required|string',
            'line_five' => 'required|string',
        ]);

        $course = Course::create($validatedData);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $filename = time() . '_' . $filename;
            $file->move(public_path('image'), $filename);
            $course->image = $filename;
            $course->save();
        }
        return back();
    }

    public function editCoursePage($id)
    {
        $course = Course::find($id);
        return view('dashboard.editCourse', compact('course'));
    }

    public function updateCourse(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'line_one' => 'required|string',
            'line_two' => 'required|string',
            'line_three' => 'required|string',
            'line_four' => 'required|string',
            'line_five' => 'required|string',
        ]);

            $course = Course::findOrFail($id);
            $course->name = $request->input('name');
            $course->price = $request->input('price');
            $course->description = $request->input('description');
            $course->line_one = $request->input('line_one');
            $course->line_two = $request->input('line_two');
            $course->line_three = $request->input('line_three');
            $course->line_four = $request->input('line_four');
            $course->line_five = $request->input('line_five');

            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('image'), $filename);
                $course->image = $filename;
            }
            $course->save();
            return redirect()->route('dashboard.courses');
        }

    public function deleteCourse($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->back();
    }

    public function teachers()
    {
        $teachers = Teacher::all();
        return view('dashboard.teachers', compact('teachers'));
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

    public function editTeacherPage($id)
    {
        $teacher = Teacher::find($id);
        return view('dashboard.editTeacher', compact('teacher'));
    }

    public function updateTeacher(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'job' => 'required',
            'body' => 'required',
        ]);

        $teacher = Teacher::findOrFail($id);
        $teacher->name = $request->input('name');
        $teacher->job = $request->input('job');
        $teacher->body = $request->input('body');

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image'), $filename);
            $teacher->image = $filename;
        }
        $teacher->save();
        return redirect()->route('dashboard.teachers');
    }

    function deleteTeacher($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        return redirect()->back();
    }


    public function information()
    {
        $information = PurchaseRequest::all();
        return view('dashboard.information', compact('information'));
    }

    function deleteInfo($id)
    {
        $info = PurchaseRequest::find($id);
        $info->delete();
        return redirect()->back();
    }

}
