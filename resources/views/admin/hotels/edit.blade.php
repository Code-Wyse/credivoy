@extends('admin.layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-body">
        <h1>Edit Hotel</h1>
        <form action="{{ route('admin.hotels.update',$hotel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <x-forms.input label="Image" input-name="image" input-id="image" :errors="$errors->get('image')"
                           :value="old('image')" type="file" accept="image/*" :required="false"/>
            <x-forms.input label="Description" input-name="description" input-id="description"
                           :errors="$errors->get('description')" :value="old('description',$hotel->description)"
                           type="textarea" :required="true"/>
            <div class="halfconentt">
                <x-forms.input label="Name" input-name="name" input-id="name" :errors="$errors->get('name')"
                               :value="old('name',$hotel->name)" :required="true"/>
                <x-forms.input input-name="destination_id" input-id="destination_id" placeholder="Select Destination"
                               type="select" :value="old('destination_id', $hotel->destination_id)" :required="true"
                               label="Destination"
                               :options="$destinations->map(fn ($destination) => ['label' => $destination->name, 'value' => $destination->id])->toArray()"/>
                <x-forms.input input-name="hotel_category_id" input-id="hotel_category_id" placeholder="Select Category"
                               type="select" :multiple="false"
                               :value="old('hotel_category_id', $hotel->hotel_category_id)" :required="true"
                               label="Hotel Category"
                               :options="$hotelCategories->map(fn ($category) => ['label' => $category->name, 'value' => $category->id])->toArray()"/>
                <x-forms.input label="Address" input-name="address" input-id="address" :errors="$errors->get('address')"
                               :value="old('address', $hotel->address)" :required="true"/>
                <x-forms.input label="Rating" input-name="rating" input-id="rating" :errors="$errors->get('rating')"
                               :value="old('rating', $hotel->rating)" :required="true" type="number" step="0.1"
                               number-min="0" number-max="5"/>
                <x-forms.input label="Guest Rating" input-name="guest_rating" input-id="guest_rating"
                               :errors="$errors->get('guest_rating')" :value="old('guest_rating', $hotel->guest_rating)"
                               :required="true" type="number" step="0.1" number-min="0" number-max="5"/>
                <x-forms.input label="Number of Rooms" input-name="number_of_rooms" input-id="number_of_rooms"
                               :errors="$errors->get('number_of_rooms')"
                               :value="old('number_of_rooms', $hotel->number_of_rooms)" :required="true" type="number"
                               step="1" number-min="1"/>
                <x-forms.input label="Number of Floors" input-name="number_of_floors" input-id="number_of_floors"
                               :errors="$errors->get('number_of_floors')"
                               :value="old('number_of_floors', $hotel->number_of_floors)" :required="true" type="number"
                               step="1"/>
                <x-forms.input label="Year of Construction" input-name="year_of_construction"
                               input-id="year_of_construction" :errors="$errors->get('year_of_construction')"
                               :value="old('year_of_construction', $hotel->year_of_construction)" :required="true"
                               type="number" step="1" number-min="1900" :number-max="now()->format('Y')"/>
                <x-forms.input label="Type" input-name="type" input-id="type" :errors="$errors->get('type')"
                               :value="old('type', $hotel->type)" :required="true"/>
            </div>
            <x-forms.input label="Google Map Link" input-name="location" input-id="location"
                           :errors="$errors->get('location')" :value="old('location', $hotel->location)"
                           :required="true" type="url"/>
            <x-forms.input label="Nearby Locations" input-name="nearby_locations" input-id="nearby_locations"
                           :errors="$errors->get('nearby_locations')"
                           :value="old('nearby_locations', $hotel->nearby_locations)" :required="true" type="textarea"/>
            <x-forms.input label="Facilities" input-name="facilities" input-id="facilities"
                           :errors="$errors->get('facilities')" :value="old('facilities', $hotel->facilities)"
                           :required="true" type="textarea"/>
            <x-forms.input label="Policy" input-name="policy" input-id="policy" :errors="$errors->get('policy')"
                           :value="old('policy', $hotel->policy)" :required="true" type="textarea"/>

            <!-- Room Types Section -->
            <h2>Room Details</h2>
            <div class="halfconentt33">
                @foreach($hotel->roomTypes as $k=>$roomType)
                    <div class="form-group">
                        <div class="inner-input33">
                            <label for="room_type_standard_{{$k}}">Room Type {{ $k+1 }}</label>
                            <input type="text" name="room_types[{{$k}}][type]" id="room_type_standard_{{$k}}"
                                   class="form-control"
                                   value="{{ old('room_types['.$k.'].type', $roomType->type) }}"
                                   required>
                        </div>
                        <div class="inner-input33">
                            <label for="room_type_standard_price_{{$k}}">Price Per Night</label>
                            <input type="number" name="room_types[{{$k}}][price_per_night]" id="room_type_standard_price_{{$k}}"
                                   class="form-control"
                                   value="{{ old('room_types['.$k.'].price_per_night', $roomType->price_per_night) }}"
                                   required>
                        </div>
                    </div>
                @endforeach

            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>    

    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('nearby_locations');
        CKEDITOR.replace('facilities');
        CKEDITOR.replace('description');
        CKEDITOR.replace('policy');
    </script>
@endsection
