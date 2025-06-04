<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $data['categories'] = Category::get();
        return view('admin.categories.index',$data);
    }

    public function create(){
        return view('admin.categories.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        Category::create($validated);
        session()->flash('success','Category Added!');
        return redirect(route('admin.categories.index'));
    }

    public function edit(Category $category){
        $data['category'] = $category;
        return view('admin.categories.edit',$data);
    }

    public function update(Request $request, Category $category){
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $category->update($validated);
        session()->flash('success','Category Updated!');
        return redirect(route('admin.categories.index'));
    }

    public function destroy(Category $category){
        $category->delete();
        session()->flash('success','Category Deleted!');
        return redirect(route('admin.categories.index'));
    }
}
