<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index(){
        $data['favorites'] = Favorite::with(['tour'])->where(['user_id' => auth()->id()])->get();
        return view('user.favorites',$data);
    }

    public function store(Request $request){
        $request->validate([
            'tour_id' => 'required|exists:tours,id'
        ]);
        $existing = Favorite::where(['tour_id' => $request->tour_id,'user_id' => auth()->id()])->first();
        if($existing){
            $existing->delete();
            return response()->json(['success' => true,'message' => 'Favorite Removed!']);
        }
        else{
            Favorite::create([
                'user_id' => auth()->id(),
                'tour_id' => $request->tour_id
            ]);
            return response()->json(['success' => true,'message' => 'Favorite Added!']);
        }

    }
}
