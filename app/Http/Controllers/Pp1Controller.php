<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pp1;
use App\Models\Grade;

class Pp1Controller extends Controller
{
    public function index()
    {
        $pp1 = Pp1::all();
        $totalFeePaid = $pp1->sum('feepaid');
        $totalFeeBalance = $pp1->sum('feebalance');
    
        return view('Pp1.index', compact('pp1', 'totalFeePaid', 'totalFeeBalance'));
    }

    public function create()
    {
        $grades = Grade::all();
        return view('Pp1.create', compact('grades'));
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'firstname' => 'required',
                'lastname' => 'required',
                'studentID' => 'required',
                'course' => 'required',
                'parentsname' => 'required',
                'parents' => 'required',
                'feepaid' => 'required',
                'classTeacher' => 'required',
                'receiptNO' => 'required',
                'class_name' => 'required',
            ]);
    
            $pp1 = new Pp1();
    
            $pp1->firstname = $request->input('firstname');
            $pp1->lastname = $request->input('lastname');
            $pp1->studentID = $request->input('studentID');
            $pp1->course = (int) $request->input('course');
            $pp1->parentsname = $request->input('parentsname');
            $pp1->parents = $request->input('parents');
            $pp1->feepaid = (int) $validatedData['feepaid'];
            $pp1->classTeacher = $validatedData['classTeacher'];
            $pp1->receiptNO = $validatedData['receiptNO'];
            $pp1->class_name = $request->input('class_name');
    
            $pp1->feebalance = $pp1->course - $pp1->feepaid;
    
            $pp1->save();
    
            return redirect()->route('Pp1.show', $pp1->id);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function show($id)
    {
        $pp1 = Pp1::findOrFail($id);
        return view('Pp1.show')->with('pp1', $pp1);
    }

    public function edit($id)
    {
        $pp1 = Pp1::findOrFail($id);
        return view('Pp1.edit')->with('pp1', $pp1);
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
            'feepaid' => 'required',
            'classTeacher' => 'required',
            'receiptNO' => 'required',
            'class_name' => 'required',
        ]);
    
        $pp1 = Pp1::find($id);
        $pp1->firstname = $validatedData['firstname'];
        $pp1->lastname = $validatedData['lastname'];
        $pp1->studentID = $validatedData['studentID'];
        $pp1->course = (int) $validatedData['course'];
        $pp1->parentsname = $validatedData['parentsname'];
        $pp1->parents = $validatedData['parents'];
        $pp1->feepaid = (int) $validatedData['feepaid'];
        $pp1->classTeacher = $validatedData['classTeacher'];
        $pp1->receiptNO = $validatedData['receiptNO'];
        $pp1->class_name = $request->input('class_name');
    
        $pp1->feebalance = $pp1->course - $pp1->feepaid;
    
        $pp1->save();
    
        return redirect()->route('Pp1.index', $pp1->id);
    }

    public function destroy($id)
    {
        try {
            $pp1 = Pp1::findOrFail($id);
            $pp1->delete();
    
            // Optionally, you can redirect to a specific route after deletion
            return redirect()->route('Pp1.index')->with('success', 'Pp1 record deleted successfully');
        } catch (\Exception $e) {
            // Handle exceptions or errors if deletion fails
            return redirect()->route('Pp1.index')->with('error', 'Failed to delete Pp1 record');
        }
    }
    
}
