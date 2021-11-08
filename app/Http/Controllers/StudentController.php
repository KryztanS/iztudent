<?php

namespace App\Http\Controllers;

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
        ]);

        $student = Student::create($attributes);

        return back()->with('success', 'Student created!');
    }
}
