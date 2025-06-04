<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index(Request $request){

        $destinationsQuery = Destination::select("name");
        if($request->has("search")){
            $destinationsQuery->where('name','like',$request->search.'%');
        }


        $destinations = $destinationsQuery->get()->pluck("name");
        return response()->json(['success' => true,'message' => '','data' => $destinations]);
    }
}
