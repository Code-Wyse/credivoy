@extends('admin.layouts.app')
@section('title') Edit Category @endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.categories.update',$category->id) }}" method="post">
                @csrf
                @method('PUT')
                <x-forms.input label="Name" input-name="name" input-id="name" :value="old('name',$category->name)" :required="true" :errors="$errors->get('name')" placeholder="Enter name" />
                <x-forms.input label="Description" input-name="description" input-id="description" :value="old('description',$category->description)" type="textarea" :required="true" :errors="$errors->get('description')" placeholder="Enter Description" />
                <button type="submit" class="btn btn-success" >Save</button>
            </form>
        </div>
    </div>
@endsection
