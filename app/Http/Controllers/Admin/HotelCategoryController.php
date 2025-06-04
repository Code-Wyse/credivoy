<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HotelCategory;
use Illuminate\Http\Request;

class HotelCategoryController extends Controller
{
    // Display a listing of the categories
    public function index()
    {
        $categories = HotelCategory::all();
        return view('admin.hotel-categories.index', compact('categories'));
    }

    // Show the form for creating a new category
    public function create()
    {
        return view('admin.hotel-categories.create');
    }

    // Store a newly created category in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        HotelCategory::create($validatedData);

        return redirect()->route('admin.hotel-categories.index')->with('success', 'Category created successfully.');
    }

    // Show the form for editing the specified category
    public function edit(HotelCategory $hotelCategory)
    {
        return view('admin.hotel-categories.edit', compact('hotelCategory'));
    }

    // Update the specified category in the database
    public function update(Request $request, HotelCategory $hotelCategory)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $hotelCategory->update($validatedData);

        return redirect()->route('admin.hotel-categories.index')->with('success', 'Category updated successfully.');
    }

    // Delete the specified category from the database
    public function destroy(HotelCategory $hotelCategory)
    {
        $hotelCategory->delete();
        return redirect()->route('admin.hotel-categories.index')->with('success', 'Category deleted successfully.');
    }
}
