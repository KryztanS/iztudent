<?php

namespace App\Http\Controllers;

use App\Models\CourseStudent;
use App\Models\Guardian;
use App\Models\GuardianStudent;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        return view('students.create', [
            'parents' => Guardian::all()
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|regex:/^[\pL\s]+$/u',
            'contact_number' => 'required|numeric',
            'email' => 'required|email|unique:students,email',
            'address' => 'required',
            'parent_ids' => 'json',
            'basic-math' => 'nullable|numeric',
            'adv-math' => 'nullable|numeric',
            'adv-pp-math' => 'nullable|numeric',
        ]);

        $student = Student::create($attributes);

        $parents = json_decode($attributes['parent_ids'], true);

        foreach ($parents as $parent) {
            GuardianStudent::create([
                'student_id' => $student['id'],
                'parent_id' => $parent,
            ]);
        }

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

    public function edit(Student $student)
    {
        return view('students.edit', [
            'student' => $student,
            'parents' => Guardian::all()
        ]);
    }

    public function update(Student $student)
    {
        // dd(request());

        $attributes = request()->validate([
            'name' => 'required|regex:/^[\pL\s]+$/u',
            'contact_number' => 'required|numeric',
            'email' => ['required', 'email', Rule::unique('students', 'email')->ignore($student->id)],
            'address' => 'required',
            'parent_ids' => 'json',
            'basic-math' => 'nullable|numeric',
            'adv-math' => 'nullable|numeric',
            'adv-pp-math' => 'nullable|numeric',
        ]);

        $student->update($attributes);

        GuardianStudent::where('student_id', $student->id)->delete();
        $parents = json_decode($attributes['parent_ids'], true);

        foreach ($parents as $parent) {
            GuardianStudent::create([
                'student_id' => $student['id'],
                'parent_id' => $parent,
            ]);
        }

        CourseStudent::where('student_id', $student->id)->delete();
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

        return back()->with('success', 'Student updated!');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return back()->with('success', 'Student deleted!');
    }
}
