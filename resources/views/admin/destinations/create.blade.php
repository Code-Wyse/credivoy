@extends('admin.layouts.app')
@section('title') Create Destination @endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.destinations.store') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <x-forms.input label="Picture" input-name="picture" input-id="picture" :value="old('picture')" :required="true" :errors="$errors->get('picture')" placeholder="Select Picture" type="file" />
                <x-forms.input label="Name" input-name="name" input-id="name" :value="old('name')" :required="true" :errors="$errors->get('name')" placeholder="Enter name" />
                <x-forms.input label="Description" input-name="description" input-id="description" :value="old('description')" type="textarea" :required="true" :errors="$errors->get('description')" placeholder="Enter Description" />
                <x-forms.input label="Domestic" input-name="domestic" input-id="domestic" type="select" :value="old('domestic')"
                   :options="[['label' => 'Yes','value' => 1],['label' => 'No','value' => 0]]"
                               placeholder="Select Domestic"
                />
                <button type="submit" class="btn btn-success" >Save</button>
            </form>
        </div>
    </div>
@endsection
