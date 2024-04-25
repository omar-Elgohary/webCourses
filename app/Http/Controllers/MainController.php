<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function loginPage()
    {
        return view('dashboard.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('loginPage')->with('error', 'Invalid email or password');
        }
    }


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

    public function showCourse($id)
    {
        $course = Course::find($id);
        return view('showCourse', compact('course'));
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
}
