<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\User; // Import the User model if needed

class ContactUss extends Controller
{
    // If you want to use ConsultationRequest model
    public function index()
    {
        $Form = Form::all();
        return view('admin.Form.index', compact('Form'));
    }


}
