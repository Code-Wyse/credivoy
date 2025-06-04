@extends('admin.layouts.app')
@section('title') Reality Of A Trip @endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <a href="{{ route('admin.video-reviews.create') }}" class="btn btn-primary mb-3" >Create New</a>
            <div class="table-responsive">
                <table class="table table-striped table-hover text-center w-100">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Video Link</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($videoReviews as $videoReview)
                        <tr>
                            <td>{{ $videoReview->title }}</td>
                            <td>{{ $videoReview->video_link }}</td>
                            <td>
                                <form action="{{ route('admin.video-reviews.destroy',$videoReview->id) }}" method="post" class="d-inline" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" ><i class="fa fa-trash" ></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        window.onload = function(){
            $("table").DataTable();
        }
    </script>
@endsection
