<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VideoReview;
use Illuminate\Http\Request;

class VideoReviewController extends Controller
{
    public function index(){
        $data['videoReviews'] = VideoReview::get();
        return view('admin.video-reviews.index',$data);
    }

    public function create(){
        return view('admin.video-reviews.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'thumbnail' => 'required',
            'video_link' => 'required'
        ]);
        $fileName = microtime(true).'.'.$request->file('thumbnail')->getClientOriginalExtension();
        $request->file('thumbnail')->move(public_path('uploaded_data'),$fileName);
        $vr = VideoReview::create([
            'title' => $request->title,
            'video_link' => $request->video_link
        ]);
        $vr->thumbnail()->create([
            'mime' => $request->file('thumbnail')->getClientMimeType(),
            'media_file' => '/uploaded_data/'.$fileName,
            'alt_text' => $request->title
        ]);
        return redirect(route('admin.video-reviews.index'))->with('success','Video Review Added!');
    }

    public function destroy($id){
        $vr = VideoReview::with(['thumbnail'])->findOrFail($id);
        unlink(public_path($vr->thumbnail->media_file));
        $vr->thumbnail()->delete();
        $vr->delete();
        return redirect(route('admin.video-reviews.index'))->with('success','Video Review Deleted!');
    }
}
