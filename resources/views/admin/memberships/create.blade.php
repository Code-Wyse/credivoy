@extends('admin.layouts.app')

@section('content')
    <h1>Create Membership</h1>

    <form action="{{ route('admin.memberships.store') }}" method="POST">
        @csrf

        <x-forms.input label="Name" input-name="type" input-id="type" :value="old('type')" :errors="$errors->get('type')" :required="true" />
        <x-forms.input label="Trip Coins Percentage (%)" input-name="trip_coins_percentage" input-id="trip_coins_percentage" :value="old('trip_coins_percentage')" :errors="$errors->get('trip_coins_percentage')" :required="true" type="number" step="1" number-min="1" number-max="100" />
        <x-forms.input label="Hotel Discount (%)" input-name="hotel_discount" input-id="hotel_discount" :value="old('hotel_discount')" :errors="$errors->get('hotel_discount')" :required="true" type="number" step="1" number-min="1" number-max="100" />
        <x-forms.input label="Trip Discount (%)" input-name="trip_discount" input-id="trip_discount" :value="old('trip_discount')" :errors="$errors->get('trip_discount')" :required="true" type="number" step="1" number-min="1" number-max="100" />
        <x-forms.input label="VIP Lounge Access" input-name="free_vip_lounge" input-id="free_vip_lounge" :required="true" :value="old('free_vip_lounge',1)" :errors="$errors->get('free_vip_lounge')" type="select" :options="config('constants.yes_no_options')" placeholder="Select VIP Lounge Access" />
        <x-forms.input label="Train Refund Exemptions" input-name="no_refund_handling_fees" input-id="no_refund_handling_fees" :required="true" :value="old('no_refund_handling_fees')" :errors="$errors->get('no_refund_handling_fees')" type="number" />
        <x-forms.input label="Priority Assistance" input-name="priority_assistance" input-id="priority_assistance" :required="true" :value="old('priority_assistance',1)" :errors="$errors->get('priority_assistance')" type="select" :options="config('constants.yes_no_options')" placeholder="Select Priority Assistance" />

        <!-- New fields -->
        <x-forms.input label="Price" input-name="price" input-id="price" :value="old('price')" :errors="$errors->get('price')" :required="true" type="number" step="0.01" number-min="0" />
        <x-forms.input label="Next Tier" input-name="next_tier" input-id="next_tier" :value="old('next_tier')" :errors="$errors->get('next_tier')" type="text" />
        <x-forms.input label="Bookings Required" input-name="bookings_required" input-id="bookings_required" :value="old('bookings_required')" :errors="$errors->get('bookings_required')" type="number" step="1" number-min="0" />

        <button type="submit" class="btn btn-primary">Create Membership</button>
    </form>

    <a href="{{ route('admin.memberships.index') }}" class="btn btn-secondary mt-3">Back to Memberships</a>
@endsection
