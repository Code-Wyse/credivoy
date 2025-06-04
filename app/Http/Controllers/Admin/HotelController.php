<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use App\Models\Destination;
use App\Models\HotelCategory;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        
        return view('admin.hotels.index', compact('hotels'));
    }

    public function create()
    {
        $destinations = Destination::all();
        $hotelCategories = HotelCategory::all();
        return view('admin.hotels.create', compact('destinations', 'hotelCategories'));
    }

 public function store(Request $request)
{

    // Validate the input data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'rating' => 'required|numeric|min:0|max:5',
        'guest_rating' => 'required|numeric|min:0|max:5',
        'number_of_rooms' => 'required|integer|min:1',
        'number_of_floors' => 'required|integer|min:1',
        'year_of_construction' => 'required|integer|min:1800|max:' . date('Y'),
        'description' => 'required|string',
        'type' => 'required|string|max:255',
        'location' => 'required|url|max:2048',
        'nearby_locations' => 'required|string',
        'facilities' => 'required|string',
        'policy' => 'required|string',
        'destination_id' => 'required|exists:destinations,id',
        'hotel_category_id' => 'required|exists:hotel_categories,id',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'room_types' => 'required|array',
        'room_types.*.type' => 'required|string|max:255',
        'room_types.*.price_per_night' => 'required|numeric|min:0',
    ]);

    Log::info('Validation passed.');

    try {
        // Remove room_types from validatedData before creating the hotel
        $roomTypes = $validatedData['room_types'];
        unset($validatedData['room_types']);

        // Create the hotel record
        $hotel = Hotel::create($validatedData);

        // Store the room types
        foreach ($roomTypes as $roomType) {
            $hotel->roomTypes()->create([
                'type' => $roomType['type'],
                'price_per_night' => $roomType['price_per_night'],
            ]);
        }

        // Handle Image Upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $hotel->image = $imageName;
            $hotel->save();
        }

        return redirect()->route('admin.hotels.index')->with('success', 'Hotel created successfully.');

    } catch (\Exception $e) {
        Log::error('Error storing hotel: ' . $e->getMessage());
        return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
    }
}






    public function show($id)
    {
        $hotel = Hotel::where('hotels.id','=',$id)->firstOrFail();
        return view('admin.hotels.index', compact('hotel'));
    }

    public function edit($id)
    {
        $hotel = Hotel::where('hotels.id','=',$id)->firstOrFail();
        $destinations = Destination::all();
        $hotelCategories = HotelCategory::all();
        return view('admin.hotels.edit', compact('hotel', 'destinations', 'hotelCategories'));
    }

    public function update(Request $request, $id)
    {


        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'rating' => 'required|numeric|min:0|max:5',
            'guest_rating' => 'required|numeric|min:0|max:5',
            'number_of_rooms' => 'required|integer|min:1',
            'number_of_floors' => 'required|integer|min:1',
            'year_of_construction' => 'required|integer|min:1800|max:' . date('Y'),
            'description' => 'required|string',
            'type' => 'required|string|max:255',
            'location' => 'required|url|max:2048',
            'nearby_locations' => 'required|string',
            'facilities' => 'required|string',
            'policy' => 'required|string',
            'destination_id' => 'required|exists:destinations,id',
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id',
            'room_types.*.type' => 'required|string|max:255',
            'room_types.*.price_per_night' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $hotel = Hotel::where('hotels.id','=',$id)->firstOrFail();

        // Update hotel details
        $hotel->update($validatedData);

        // Sync categories
        $hotel->categories()->sync($request->categories);

        // Handle Room Types
        $hotel->roomTypes()->delete(); // Delete existing room types before updating
        if ($request->has('room_types')) {
            foreach ($request->room_types as $roomType) {
                $hotel->roomTypes()->create($roomType);
            }
        }

        // Handle Image Upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($hotel->image) {
                $oldImagePath = public_path('images/' . $hotel->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $hotel->image = $imageName;
            $hotel->save();
        }

        return redirect()->route('admin.hotels.index')->with('success', 'Hotel updated successfully.');
    }



    public function destroy($id)
    {
        $hotel = Hotel::where('hotels.id','=',$id)->firstOrFail();
        try {
            if ($hotel->image) {
                // Delete the image file from the public path
                $imagePath = public_path('images/' . $hotel->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $hotel->delete();
            return redirect()->route('admin.hotels.index')->with('success', 'Hotel deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting hotel: ' . $e->getMessage());
            return redirect()->route('admin.hotels.index')->with('error', 'An error occurred while deleting the hotel.');
        }
    }
}
