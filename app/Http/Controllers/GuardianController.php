<?php

namespace App\Http\Controllers;

use App\Models\Guardian;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GuardianController extends Controller
{
    public function index()
    {
        return view('parents.index', [
            'parents' => Guardian::orderBy('name', 'asc')->paginate(5)
        ]);
    }

    public function create()
    {
        return view('parents.create', [
            'parents' => Guardian::all()
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|regex:/^[\pL\s\.\-]+$/u',
            'contact_number' => 'required|numeric',
            'email' => 'required|email|unique:parents,email',
        ]);

        $parent = Guardian::create($attributes);

        return redirect()->route('parents.index')->with('success', 'Parent created!');
    }

    public function edit(Guardian $parent)
    {
        return view('parents.edit', [
            'parent' => $parent,
        ]);
    }

    public function update(Guardian $parent)
    {
        $attributes = request()->validate([
            'name' => 'required|regex:/^[\pL\s\.\-]+$/u',
            'contact_number' => 'required|numeric',
            'email' => ['required', 'email', Rule::unique('parents', 'email')->ignore($parent->id)],
        ]);

        $parent->update($attributes);

        return back()->with('success', 'Parent updated!');
    }

    public function destroy(Guardian $parent)
    {
        $parent->delete();

        return back()->with('success', 'Parent deleted!');
    }
}
