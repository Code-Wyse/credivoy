<?php

// app/Http/Controllers/TestimonialController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\User; 

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|max:2048'
        ]);
            
        $imagePath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;
        // dd($imagePath);
        $fileName = time().'_'.$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploaded_data'),$fileName);
        // $destination = Destination::create($destinationData);
        $testi = Testimonial::create([
            'name' => $request->name,
            'content' => $request->content,
            'image' => $imagePath
        ]);

        $testi->picture()->create([
            'mime' => $request->file('image')->getClientMimeType(),
            'media_file' => '/uploaded_data/'.$fileName
        ]);

      
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|max:2048'
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('images', 'public') : $testimonial->image;

        $testimonial->update([
            'name' => $request->name,
            'content' => $request->content,
            'image' => $imagePath
        ]);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
