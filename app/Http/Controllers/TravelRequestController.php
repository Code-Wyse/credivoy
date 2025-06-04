<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelRequest;

class TravelRequestController extends Controller
{
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'selectField' => 'required|string',
            'datepicker' => 'required|date',
            'name' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|email|max:255',
            'add-requirement' => 'nullable|string',
        ]);

        $validatedData['add_requirement'] = $validatedData['add-requirement'] ?? null;
        unset($validatedData['add-requirement']);

        TravelRequest::create($validatedData);

        return redirect()->back()->with('success', 'Your travel request has been submitted successfully!');
    }

}
