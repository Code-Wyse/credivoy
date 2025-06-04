<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Fetch all blogs with pagination
        $blogs = Blog::with('category')->paginate(10);

        // Pass the blogs to the view
        return view('blogs-page', compact('blogs'));
    }

    public function show($slug){
        $data['categories'] = Category::whereHas('blogs')->get();
        $data['blog'] = Blog::where(['slug' => $slug])->firstOrFail();
        $data['recentBlogs'] = Blog::where('slug','!=',$slug)->orderBy('created_at','desc')->limit(3)->get();
        $data['popularTags'] = Blog::popularTags();
        return view('blog-details',$data);
    }
}
