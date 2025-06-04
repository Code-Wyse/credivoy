@extends('admin.layouts.app')
@section('title') Create Video Review @endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.video-reviews.store') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <x-forms.input label="Title" input-name="title" input-id="title" placeholder="Enter Title" :required="true" :value="old('title')" :errors="$errors->get('title')"  />
                <x-forms.input label="Thumbnail" input-name="thumbnail" input-id="thumbnail" placeholder="Select Thumbnail" :required="true" :value="old('thumbnail')" :errors="$errors->get('thumbnail')"  type="file" accept="images/*" />
                <x-forms.input label="Video Link" input-name="video_link" input-id="video_link" placeholder="Enter Video Link" :required="true" :value="old('video_link')" :errors="$errors->get('video_link')" type="url"  />
                <button  type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
