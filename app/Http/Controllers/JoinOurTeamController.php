<?php

namespace App\Http\Controllers;

use App\Models\Ambassador;
use Illuminate\Http\Request;

class JoinOurTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("front.join-our-team");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $request->validate([
            'full_name' => 'required',
            'email' => 'nullable|unique:ambassadors,email',
            'phone' => 'required|max:15',
            'university' => 'required|max:30',
            'campus' => 'nullable|max:50',
            'dob' => 'required|date|date_format:Y-m-d|before:today',
            'cnic' => 'required',
        ]);

        try{
            Ambassador::create([
                'full_name' => $request->full_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'university' => $request->university,
                'campus' => $request->campus,
                'dob' => $request->dob,
                'cnic' => $request->cnic,
            ]);
            return redirect()->back()->with(['successMsg' => ["Successfully recived your request. We will contact you as soon as possible"]]);

        }catch(\Exception $e){
            return redirect()->back()->withErrors([$e->getMessage]);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
