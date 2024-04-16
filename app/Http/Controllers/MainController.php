<?php
namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    { 
        return view('about');
    }

    public function courses()
    {
        $courses = Course::get();
        return view('courses', compact('courses'));
    }

    public function teachers()
    {
        $teachers = Teacher::get();
        return view('teacher', compact('teachers'));
    }

    public function showTeacher($id)
    {
        return view('pageTeacher');
    }

    public function contact()
    {
        return view('contact');
    }

    public function showCourse($id)
    {
        return view('showCourse');
    }
}
