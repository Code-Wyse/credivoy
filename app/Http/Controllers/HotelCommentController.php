<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\HotelComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HotelCommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'comment' => 'required|string|max:500',
            'communication' => 'required|integer|between:1,5',
            'recommend' => 'required|integer|between:1,5',
            'service' => 'required|integer|between:1,5',
        ]);

        if (!Auth::check()) {
            return redirect()->route('login');
        }

        HotelComment::create([
            'user_id' => Auth::id(),
            'hotel_id' => $request->hotel_id,
            'comment' => $request->comment,
            'communication' => $request->communication,
            'recommend' => $request->recommend,
            'service' => $request->service,
        ]);

        return redirect()->back()->with('success', 'Comment added successfully!');
    }
    public function show(Hotel $hotel)
{
    // Retrieve comments for the hotel
    $comments = $hotel->comments()->latest()->get();

    // Return the view with hotel and comments data
    return view('hotel_details', [
        'hotel' => $hotel,
        'comments' => $comments,
    ]);
}
}

