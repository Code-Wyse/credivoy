<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index(){
        $data['destinations'] = Destination::get();
        return view('admin.destinations.index',$data);
    }

    public function create(){
        return view('admin.destinations.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'picture' => 'required|file|image',
            'domestic' => 'nullable'
        ]);
        $destinationData = $request->only(['name','description','domestic']);
        if(!isset($destinationData['domestic'])) {
            $destinationData['domestic'] = 0;
        }
        $fileName = time().'_'.$request->file('picture')->getClientOriginalName();
        $request->file('picture')->move(public_path('uploaded_data'),$fileName);
        $destination = Destination::create($destinationData);
        $destination->picture()->create([
            'mime' => $request->file('picture')->getClientMimeType(),
            'media_file' => '/uploaded_data/'.$fileName
        ]);
        session()->flash('success','Destination Added!');
        return redirect(route('admin.destinations.index'));
    }

    public function edit(Destination $destination){
        $data['destination'] = $destination;
        return view('admin.destinations.edit',$data);
    }

    public function update(Request $request, Destination $destination){
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'domestic' => 'nullable'
        ]);
        $destination->update($validated);
        session()->flash('success','Destination Updated!');
        return redirect(route('admin.destinations.index'));
    }

    public function destroy(Destination $destination){
        $destination->delete();
        session()->flash('success','Destination Deleted!');
        return redirect(route('admin.destinations.index'));
    }
}
