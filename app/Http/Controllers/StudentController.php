<?php

namespace App\Http\Controllers;

use App\Models\CourseStudent;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index', [
            'students' => Student::orderBy('name', 'asc')->paginate(5)
        ]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|regex:/^[\pL\s]+$/u',
            'contact_number' => 'required|numeric',
            'email' => 'required|email|unique:students,email',
            'address' => 'required',
            'basic-math' => 'nullable|numeric',
            'adv-math' => 'nullable|numeric',
            'adv-pp-math' => 'nullable|numeric',
        ]);

        $student = Student::create($attributes);

        if (isset($attributes['basic-math'])) {
            CourseStudent::create([
                'student_id' => $student['id'],
                'course_id' => $attributes['basic-math'],
            ]);
        }
        if (isset($attributes['adv-math'])) {
            CourseStudent::create([
                'student_id' => $student['id'],
                'course_id' => $attributes['adv-math'],
            ]);
        }
        if (isset($attributes['adv-pp-math'])) {
            CourseStudent::create([
                'student_id' => $student['id'],
                'course_id' => $attributes['adv-pp-math'],
            ]);
        }

        return back()->with('success', 'Student created!');
    }
}
