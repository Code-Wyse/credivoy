<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index(){
        $data['blogs'] = Blog::get();
        return view('admin.blogs.index',$data);
    }

    public function create(){
        $data['categories'] = Category::get();
        return view('admin.blogs.create',$data);
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'featured_image' => 'required|file|image',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'required|array|min:1',
            'author' => 'required'
        ]);
        $blogData = $request->only(['title','content','category_id','tags','author']);
        $fileName = microtime(true).'.'.$request->file('featured_image')->getClientOriginalExtension();
        $request->file('featured_image')->move(public_path('uploaded_data'),$fileName);
        $blogData['featured_image'] = $fileName;
        $blogData['slug'] = Str::slug($request->title);
        Blog::create($blogData);
        return redirect(route('admin.blogs.index'))->with('success','Blog Added!');
    }

    public function edit($id){
        $data['categories'] = Category::get();
        $data['blog'] = Blog::findOrFail($id);
        return view('admin.blogs.edit',$data);
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'featured_image' => 'nullable|file|image',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'required|array|min:1',
            'author' => 'required'
        ]);
        $blogData = $request->only(['title','content','category_id','tags','author']);
        if($request->has('featured_image') and $request->hasFile('featured_image')){
            $fileName = microtime(true).'.'.$request->file('featured_image')->getClientOriginalExtension();
            $request->file('featured_image')->move(public_path('uploaded_data'),$fileName);
            $blogData['featured_image'] = $fileName;
        }
        $blogData['slug'] = Str::slug($request->title);
        Blog::findOrFail($id)->update($blogData);
        return redirect(route('admin.blogs.index'))->with('success','Blog Updated!');
    }

    public function destroy($id){
        Blog::findOrFail($id)->delete();
        return redirect(route('admin.blogs.index'))->with('success','Blog Deleted!');
    }
}
