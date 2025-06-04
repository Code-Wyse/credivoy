<?php
// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch testimonials from the database
        $testimonials = Testimonial::all();
        dd ($testimonials);
        // Pass the testimonials to the home view
        return view('', compact('testimonials'));
    }
}
