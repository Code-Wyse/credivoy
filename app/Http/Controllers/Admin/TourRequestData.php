<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TravelRequest;
use App\Models\User; // Import the User model if needed

class TourRequestData extends Controller
{
    // If you want to use ConsultationRequest model
    public function index()
    {
        $TravelRequest = TravelRequest::all();
        return view('admin.TravelRequest.index', compact('TravelRequest'));
    }


}
