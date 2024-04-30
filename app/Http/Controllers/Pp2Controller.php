<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pp2;
use App\Models\Grade;

class Pp2Controller extends Controller
{
    // public function index()
    // {
    //     $pp2 = Pp2::all();
    //     $totalFeePaid = $pp2->sum('feepaid');
    //     $totalFeeBalance = $pp2->sum('feebalance');

    //     return view('Pp2.index', compact('pp2', 'totalFeePaid', 'totalFeeBalance'));
    public function index(Request $request)
    {
        // Retrieve the class name from the request
        $className = $request->input('class_name');
    
        // Check if a class name is provided
        if ($className) {
            // If a class name is provided, filter PP2 records by that class name
            $pp2 = Pp2::where('class_name', $className)->get();
        } else {
            // If no class name is provided, retrieve all PP2 records
            $pp2 = Pp2::all();
        }
    
        // Calculate total fee paid and total fee balance
        $totalFeePaid = $pp2->sum('feepaid');
        $totalFeeBalance = $pp2->sum('feebalance');
    
        // Pass the data to the view
        return view('Pp2.index', compact('pp2', 'totalFeePaid', 'totalFeeBalance'));
    }

    public function create()
    {
        $classNames = Grade::pluck('classname')->toArray();
    
        // Initialize an empty array to store class teachers corresponding to each class name
        $classTeachers = [];
    
        // Iterate through each class name and fetch the corresponding class teacher
        foreach ($classNames as $className) {
            // Fetch the class teacher for the current class name
            $classTeacher = Grade::where('classname', $className)->value('classteacher');
            // Add the class teacher to the array with the class name as the key
            $classTeachers[$className] = $classTeacher;
        }
    
        return view('Pp2.create', compact('classNames', 'classTeachers'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'studentID' => 'required|unique:pp2s', // Ensure student ID is unique
            'course' => 'required',
            'parentsname' => 'required',
            'parents' => 'required',
            'feepaid' => 'required',
            'classTeacher' => 'required',
            'receiptNO' => 'required',
            'class_name' => 'required',
        ]);

        $pp2 = new Pp2();

        $pp2->firstname = $request->input('firstname');
        $pp2->lastname = $request->input('lastname');
        $pp2->studentID = $request->input('studentID');
        $pp2->course = (int) $request->input('course');
        $pp2->parentsname = $request->input('parentsname');
        $pp2->parents = $request->input('parents');
        $pp2->feepaid = (int) $validatedData['feepaid'];
        $pp2->classTeacher = $validatedData['classTeacher'];
        $pp2->receiptNO = $validatedData['receiptNO'];
        $pp2->class_name = $request->input('class_name');
        $pp2->term = 'term1'; // Set default term
        $pp2->grade = 'playgroup'; // Set default grade

        // Calculate total fee for the term
        $totalFee = $this->calculateTotalFee($request->term);

        // Calculate fee balance
        $feeBalance = $totalFee - $pp2->feepaid;

        // Check for excess fee
        if ($feeBalance < 0) {
            // If there's excess fee, deduct the total fee for the term from feepaid
            $pp2->feepaid -= $totalFee;
            // Carry forward the excess fee to the next term
            $pp2->forwarded_fee = abs($feeBalance); // excess fee
        } else {
            // No excess fee, so set forwarded_fee to 0
            $pp2->forwarded_fee = 0;
        }

        // Calculate fee balance after adjusting for excess fee
        $pp2->feebalance = $pp2->course - $pp2->feepaid;

        $pp2->save();

        return redirect()->route('Pp2.show', $pp2->id);
    }

    public function show($id)
    {
        $pp2 = Pp2::findOrFail($id);
        return view('Pp2.show')->with('pp2', $pp2);
    }

    public function edit($id)
    {
        $pp2 = Pp2::findOrFail($id);
        $classNames = Grade::pluck('classname')->toArray();
        $classTeachers = Grade::pluck('classteacher')->toArray();
        return view('Pp2.edit', compact('pp2', 'classNames', 'classTeachers'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'studentID' => 'required|unique:pp2s,studentID,'.$id, // Ensure student ID is unique except for the current record
            'course' => 'required',
            'parentsname' => 'required',
            'parents' => 'required',
            'feepaid' => 'required',
            'classTeacher' => 'required',
            'receiptNO' => 'required',
            // 'class_name' => 'required',
        ]);

        $pp2 = Pp2::find($id);
        $pp2->firstname = $validatedData['firstname'];
        $pp2->lastname = $validatedData['lastname'];
        $pp2->studentID = $validatedData['studentID'];
        $pp2->course = (int) $validatedData['course'];
        $pp2->parentsname = $validatedData['parentsname'];
        $pp2->parents = $validatedData['parents'];
        $pp2->feepaid = (int) $validatedData['feepaid'];
        $pp2->classTeacher = $validatedData['classTeacher'];
        $pp2->receiptNO = $validatedData['receiptNO'];
        $pp2->class_name = $request->input('class_name');

        // Calculate total fee for the term
        $totalFee = $this->calculateTotalFee($pp2->term);

        // Calculate fee balance
        $pp2->feebalance = $totalFee - $pp2->feepaid;

        $pp2->save();

        return redirect()->route('Pp2.index', $pp2->id);
    }

    public function destroy($id)
    {
        $pp2 = Pp2::findOrFail($id);
        $pp2->delete();
        return redirect()->route('Pp2.index')->with('success', 'Pp2 deleted successfully');
    }

    // Function to calculate total fee for a given term (you can adjust this based on your application's fee structure)
    private function calculateTotalFee($term)
    {
        // Example logic to calculate total fee based on term
        if ($term == 'term1') {
            return 6000; // Example fee for term 1
        } elseif ($term == 'term2') {
            return 4000; // Example fee for term 2
        } elseif ($term == 'term3') {
            return 3000; // Example fee for term 3
        }
    }
}
