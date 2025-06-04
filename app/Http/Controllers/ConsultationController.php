<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;

class ConsultationController extends Controller
{



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'datepicker' => 'required|date',
            'requirement' => 'nullable|string',
            'trip_title' => 'required|string|max:255',
        ]);

        Consultation::create($validatedData);

        return redirect()->back()->with('success', 'Consultation request submitted successfully.');
    }
}
