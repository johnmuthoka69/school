<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Playgroup;
use App\Models\Pp1;
use App\Models\Pp2;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Use Laravel Scout to search multiple models
        $grades = Grade::search($query)->get();
        $playgroups = Playgroup::search($query)->get();
        $pp1s = Pp1::search($query)->get();
        $pp2s = Pp2::search($query)->get();

        // Pass results as an associative array
        $results = [
            'grades' => $grades,
            'playgroups' => $playgroups,
            'pp1s' => $pp1s,
            'pp2s' => $pp2s,
        ];

        // You can customize this view or return JSON as needed
        return view('search.results', compact('results'));
    }

    // app/Http/Controllers/SearchController.php

    public function showAssociated($model, $id)
    {
        // Retrieve associated values based on the selected model and id
        // You'll need to customize this based on your application structure

        // Example: Assuming each model has a 'relatedModel' relationship
        $associatedValues = null;
        switch ($model) {
            case 'grades':
                $associatedValues = Grade::find($id)->relatedModel;
                break;
            case 'playgroups':
                $associatedValues = Playgroup::find($id)->relatedModel;
                break;
            case 'pp1s':
                $associatedValues = Pp1::find($id)->relatedModel;
                break;
            case 'pp2s':
                $associatedValues = Pp2::find($id)->relatedModel;
                break;
            // Add more cases if needed
        }

        return view('associated.show', compact('associatedValues'));
    }
}
