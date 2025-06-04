@extends('admin.layouts.app')
@section('title') Create Blog @endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.blogs.store') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <x-forms.input label="Category" placeholder="Select Category" input-name="category_id" input-id="category_id" :value="old('category_id')" :errors="$errors->get('category_id')" :required="true" type="select" :options="$categories->map(fn ($category) => ['label' => $category->name,'value' => $category->id])->toArray()" />
                <x-forms.input label="Title" placeholder="Title" input-name="title" input-id="title" :value="old('title')" :errors="$errors->get('title')" :required="true" />
                <x-forms.input label="Content" placeholder="Content" input-name="content" input-id="content_input" :value="old('content')" :errors="$errors->get('content')" :required="true" type="textarea" />
                <x-forms.input label="Featured Image" placeholder="Featured Image" input-name="featured_image" input-id="featured_image" :value="old('featured_image')" :errors="$errors->get('featured_image')" :required="true" type="file" />
                <x-forms.input label="Tags"  input-name="tags[]" input-id="tags" :value="old('tags',[])" :errors="$errors->get('tags')" :required="true" type="select" :multiple="true" :options="old('tags',[])" />
                <x-forms.input label="Author" placeholder="Author" input-name="author" input-id="author" :value="old('author')" :errors="$errors->get('author')" :required="true" />
                <button type="submit" class="btn btn-success" >Save</button>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        window.onload = function(){
            CKEDITOR.replace('content_input');
            $("#category_id").select2();
            $("#tags").select2({
                tags: true
            });
        }
    </script>
@endsection
