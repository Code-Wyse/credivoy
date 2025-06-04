<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Consultation;
use App\Models\User; // Import the User model if needed

class ConsultationRequestController extends Controller
{
    // If you want to use ConsultationRequest model
    public function index()
    {
        $consultationRequests = Consultation::all();
        return view('admin.consultation_requests.index', compact('consultationRequests'));
    }


}
