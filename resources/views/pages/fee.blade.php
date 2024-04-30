{{-- <!-- 

namespace App\Http\Controllers;

use App\Models\Fee;
use App\Http\Requests\StoreFeeRequest;
use App\Http\Requests\UpdateFeeRequest;
use League\CommonMark\Extension\CommonMark\Parser\Block\FencedCodeParser;

class FeeController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
        $Fee=Fee::all();
        return view('Fee.index')->with('Fee',$Fee);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Fee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeeRequest $request)
    {
        $this->validate($request,[  
            'firstname'=>'required',
            'lastname'=>'required',
            'studentID'=>'required',
            'course'=>'required',
            'parentsname'=>'required',
            'parents'=>'required',
        ]);
        //Create Post

       $Fee = new Fee ($request->all());
        $Fee->firstname = $request->firstname;
        $Fee->lastname = $request->lastname;
        $Fee->studentID = $request->inputstudent;
        $Fee->course = $request->course;
        $Fee->parentsname = $request->parentsname;
        $Fee->parents = $request->parents;
        $Fee->save();
       Fee::create($request->all());

        // return redirect('/Fee')->with('succes','Fee created');
        
        return redirect()->route('Fee.show', $Fee->id);

        // return redirect()->route('Fee.create');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Fee= Fee::find($id);
        // return ModelsFee::find($id);
        return view('Fee.show')->with('Fee',$Fee);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $Fee::find($id);
        // $Fee = Fee::all()

        // show the edit form and pass the shark
        // return View::make('Fee.edit')
        //     ->with('Fee', $Fee);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFeeRequest $request, Fee $fee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fee $fee)
    {
        //
 
    }
}
 --> --}}
