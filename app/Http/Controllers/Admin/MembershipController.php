<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Membership;
use App\Http\Controllers\Controller;

class MembershipController extends Controller
{
    public function index()
    {
        $memberships = Membership::all();
        return view('admin.memberships.index', compact('memberships'));
    }

    public function create()
    {
        return view('admin.memberships.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'type' => 'required|unique:memberships',
            'trip_coins_percentage' => 'required|integer',
            'hotel_discount' => 'required|integer',
            'trip_discount' => 'required|integer',
            'free_vip_lounge' => 'boolean',
            'no_refund_handling_fees' => 'required|integer',
            'priority_assistance' => 'boolean',
            'price' => 'required|numeric|min:0',
            'next_tier' => 'nullable|string',
            'bookings_required' => 'nullable|integer|min:0',
        ]);

        Membership::create($request->all());

        return redirect()->route('admin.memberships.index')
            ->with('success', 'Membership created successfully');
    }

    public function show($id)
    {
        $membership = Membership::find($id);
        return view('admin.memberships.show', compact('membership'));
    }

    public function edit($id)
    {
        $membership = Membership::findOrFail($id);
        return view('admin.memberships.edit', compact('membership'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'type' => 'required|unique:memberships,type,' . $id,
            'trip_coins_percentage' => 'required|integer',
            'hotel_discount' => 'required|integer',
            'trip_discount' => 'required|integer',
            'free_vip_lounge' => 'boolean',
            'no_refund_handling_fees' => 'required|integer',
            'priority_assistance' => 'boolean',
            'price' => 'required|numeric|min:0',
            'next_tier' => 'nullable|string',
            'bookings_required' => 'nullable|integer|min:0',
        ]);

        $membership = Membership::find($id);
        $membership->update($request->all());

        return redirect()->route('admin.memberships.index')
            ->with('success', 'Membership updated successfully');
    }

    public function destroy($id)
    {
        Membership::find($id)->delete();
        return redirect()->route('admin.memberships.index')
            ->with('success', 'Membership deleted successfully');
    }
}
