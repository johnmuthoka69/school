<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playgroup;
use App\Models\Grade;

class PlaygroupController extends Controller
{
    public function index()
    {
        $query = request('query');

        $playgroup = $query
            ? Playgroup::search($query)->get()
            : Playgroup::all();

        $totalFeePaid = $playgroup->sum('feepaid');
        $totalFeeBalance = $playgroup->sum('feebalance');

        return view('Playgroup.index', compact('playgroup', 'totalFeePaid', 'totalFeeBalance', 'query'));
    }

    public function create()
    {
        $grades = Grade::all();
        return view('Playgroup.create', compact('grades'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'studentID' => 'required',
            'course' => 'required',
            'parentsname' => 'required',
            'parents' => 'required',
            'feepaid' => 'required|numeric',
            'classTeacher' => 'required',
            'receiptNO' => 'required',
            'class_name' => 'required',
        ]);

        try {
            $playgroup = new Playgroup();
            $playgroup->fill($validatedData);
            $playgroup->feebalance = $playgroup->course - $playgroup->feepaid;
            $playgroup->save();

            return redirect()->route('Playgroup.show', $playgroup->id);
        } catch (\Exception $e) {
            // Log or handle the error gracefully
            return redirect()->back()->with('error', 'An error occurred while saving the playgroup.');
        }
    }

    public function show($id)
    {
        $playgroup = Playgroup::findOrFail($id);
        return view('Playgroup.show')->with('playgroup', $playgroup);
    }

    public function edit($id)
    {
        $playgroup = Playgroup::findOrFail($id);
        return view('Playgroup.edit')->with('playgroup', $playgroup);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'studentID' => 'required',
            'course' => 'required',
            'parentsname' => 'required',
            'parents' => 'required',
            'feepaid' => 'required|numeric',
            'classTeacher' => 'required',
            'receiptNO' => 'required',
            'class_name' => 'required',
        ]);

        try {
            $playgroup = Playgroup::find($id);
            $playgroup->fill($validatedData);
            $playgroup->feebalance = $playgroup->course - $playgroup->feepaid;
            $playgroup->save();

            return redirect()->route('Playgroup.index')->with('success', 'Playgroup updated successfully.');
        } catch (\Exception $e) {
            // Log or handle the error gracefully
            return redirect()->back()->with('error', 'An error occurred while updating the playgroup.');
        }
    }

    public function destroy($id)
    {
        $playgroup = playgroup::findOrFail($id);
        $playgroup->delete();
    
        return redirect()->route('Playgroup.index')->with('success', 'Playgroup deleted successfully');
    }
    
}
