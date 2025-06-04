<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;


class FormController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Create a new form entry
        Form::create($validatedData);

        // Redirect or respond as needed
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
