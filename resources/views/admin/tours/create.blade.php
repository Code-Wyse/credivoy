@extends('admin.layouts.app')
@section('title') Create Tour @endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.tours.store') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <x-forms.input input-name="media" input-id="media" accept="image/*" label="Image" :required="true" placeholder="Select Image" :value="old('media')" type="file" :errors="$errors->get('media')" />
                <div class="row">
                    <div class="col-md-6">
                        <x-forms.input input-name="category_ids[]" input-id="category_ids" placeholder="Select Category" type="select" :multiple="true" :value="old('category_ids')" :required="true" label="Category" :options="$categories->map(fn ($category) => ['label' => $category->name,'value' => $category->id])->toArray()" />
                        <x-forms.input input-name="title" input-id="title" placeholder="Enter Title" :errors="$errors->get('title')" :value="old('title')" label="Title" :required="true" />
                        <x-forms.input input-name="duration" input-id="duration" placeholder="Enter duration" :errors="$errors->get('duration')" :value="old('duration')" label="Duration" type="number" :required="true" />
                        <x-forms.input input-name="age" input-id="age" placeholder="Enter age" :errors="$errors->get('age')" :value="old('age')" label="Age" type="number" :required="true" />
                        <x-forms.input input-name="price" input-id="price" placeholder="Enter price" :errors="$errors->get('price')" :value="old('price')" label="Price" type="number" step="0.01" :required="true" />
                        <x-forms.input input-name="child_price" input-id="child_price" placeholder="Enter child price" :errors="$errors->get('child_price')" :value="old('child_price')" label="Child Price" type="number" step="0.01" number-min="1" :required="true" />
                    </div>
                    <div class="col-md-6">
                        <x-forms.input input-name="destination_ids[]" input-id="destination_ids" placeholder="Select Destination" type="select" :multiple="true" :value="old('destination_ids')" :required="true" label="Destination" :options="$destinations->map(fn ($category) => ['label' => $category->name,'value' => $category->id])->toArray()" />
                        <x-forms.input input-name="group_size" input-id="group_size" placeholder="Enter Group Size" :errors="$errors->get('group_size')" :value="old('group_size')" label="Group Size" type="number" :required="true" />
                        <x-forms.input input-name="location_link" input-id="location_link" placeholder="Enter Location Link" :errors="$errors->get('location_link')" :value="old('location_link')" label="Location Link" :required="true" type="url" />
                        <x-forms.input input-name="location" input-id="location" placeholder="Enter Location" :errors="$errors->get('location')" :value="old('location')" label="Location" :required="true" />
                        <x-forms.input input-name="is_featured" input-id="is_featured" placeholder="Select is Featured" :errors="$errors->get('is_featured')" :value="old('is_featured')" label="Featured" type="select"  :options="[['value' => 1,'label' => 'Yes'],['value' => 0,'label' => 'No']]" />
                        <x-forms.input input-name="original_price" input-id="original_price" placeholder="Enter original price" :errors="$errors->get('original_price')" :value="old('original_price')" label="Original Price" type="number" step="0.01" :required="false" />
                        <x-forms.input label="Domestic" input-name="domestic" input-id="domestic" type="select" :value="old('domestic')"
                                       :options="[['label' => 'Yes','value' => 1],['label' => 'No','value' => 0]]"
                                       placeholder="Select Domestic"
                        />
                    </div>
                </div>
                <x-forms.input input-name="overview" input-id="overview" placeholder="Enter Overview" :errors="$errors->get('overview')" :value="old('overview')" label="Overview" :required="true" />
                <x-forms.input input-id="inclusion" input-name="inclusion" placeholder="Enter Inclusion" :errors="$errors->get('inclusion')" :value="old('inclusion')" type="textarea" label="Inclusion" />
                <button type="submit" class="btn btn-success" >Save</button>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        window.onload = function(){
            CKEDITOR.replace('inclusion');
            $("#category_ids").select2();
            $("#destination_ids").select2();
        }
    </script>
@endsection
