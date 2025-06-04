@extends('admin.layouts.app')
@section('title') Create Category @endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.categories.store') }}" method="post">
                @csrf
                <x-forms.input label="Name" input-name="name" input-id="name" :value="old('name')" :required="true" :errors="$errors->get('name')" placeholder="Enter name" />
                <x-forms.input label="Description" input-name="description" input-id="description" :value="old('description')" type="textarea" :required="true" :errors="$errors->get('description')" placeholder="Enter Description" />
                <button type="submit" class="btn btn-success" >Save</button>
            </form>
        </div>
    </div>
@endsection
