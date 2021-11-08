<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // dd(Student::orderBy('name', 'asc')->paginate(5));

        return view('students.index', [
            'students' => Student::orderBy('name', 'asc')->paginate(5)
        ]);
    }
}
