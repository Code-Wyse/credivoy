<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{

    public function show($id){
        $data['destination'] = Destination::with(['tours'])->findOrFail($id);
        return view('destinations',$data);
    }

}
