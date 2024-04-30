<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::all();
        return view('Grade.index')->with('grades', $grades);
    }

    public function create()
    {
        return view('Grade.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'classname' => 'required',
            'classteacher' => 'required',
        ]);

        $grades = new Grade();
        $grades->classname = $validatedData['classname'];
        $grades->classteacher = $validatedData['classteacher'];
        $grades->save();

        return redirect()->route('Grade.index')->with('success', 'Grade created successfully.');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'classname' => 'required',
            'classteacher' => 'required',
        ]);

        $grades = Grade::findOrFail($id);
        $grades->classname = $validatedData['classname'];
        $grades->classteacher = $validatedData['classteacher'];
        $grades->save();

        return redirect()->route('Grade.index')->with('success', 'Grade updated successfully.');
    }

    public function destroy($id)
    {
        $grades = Grade::findOrFail($id);
        $grades->delete();

        return redirect()->route('Grade.index')->with('success', 'Grade deleted successfully.');
    }

    public function show($id)
    {
        $grades = Grade::findOrFail($id);

        return view('Grade.show', compact('grades'));
    }

    public function edit($id)
    {
        $grades = Grade::findOrFail($id);

        return view('Grade.edit', compact('grades'));
    }
}
