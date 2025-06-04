@extends('admin.layouts.app')
@section('title') Edit Destination @endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.destinations.update',$destination->id) }}" method="post">
                @csrf
                @method('PUT')
                <x-forms.input label="Name" input-name="name" input-id="name" :value="old('name',$destination->name)" :required="true" :errors="$errors->get('name')" placeholder="Enter name" />
                <x-forms.input label="Description" input-name="description" input-id="description" :value="old('description',$destination->description)" type="textarea" :required="true" :errors="$errors->get('description')" placeholder="Enter Description" />
                <x-forms.input label="Domestic" input-name="domestic" input-id="domestic" type="select" :value="old('domestic',$destination->domestic)"
                               :options="[['label' => 'Yes','value' => 1],['label' => 'No','value' => 0]]"
                               placeholder="Select Domestic"
                />
                <button type="submit" class="btn btn-success" >Save</button>
            </form>
        </div>
    </div>
@endsection
