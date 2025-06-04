<?php
namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\TourComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TourCommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'tour_id' => 'required|exists:tours,id',
            'comment' => 'required|string|max:500',
            'communication' => 'required|integer|between:1,5',
            'recommend' => 'required|integer|between:1,5',
            'service' => 'required|integer|between:1,5',
        ]);

        if (!Auth::check()) {
            return redirect()->route('login');
        }

        TourComment::create([
            'user_id' => Auth::id(),
            'tour_id' => $request->tour_id,
            'comment' => $request->comment,
            'communication' => $request->communication,
            'recommend' => $request->recommend,
            'service' => $request->service,
        ]);

        return redirect()->back()->with('success', 'Comment added successfully!');
    }
}
