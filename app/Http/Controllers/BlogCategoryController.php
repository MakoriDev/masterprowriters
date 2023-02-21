<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $blogCategories = BlogCategory::all();

        return view('blog-category.index', compact('blogCategories'));
    }

    public function create()
    {
        $blogCategory = new BlogCategory();

        return view('blog-category.create', compact('blogCategory'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255']
        ]);

        BlogCategory::create($validated);

        return redirect()->route('blog-category.index')->with('success', 'Blog category added successfully');
    }

    public function edit(BlogCategory $blogCategory)
    {
        return view('blog-category.edit', compact('blogCategory'));
    }

    public function update(Request $request, BlogCategory $blogCategory)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255']
        ]);

        $blogCategory->update($validated);

        return redirect()->route('blog-category.index')->with('success', 'Blog category updated successfully');
    }

    public function destroy(BlogCategory $blogCategory)
    {
        $blogCategory->delete();

        return redirect()->route('blog-category.index')->with('success', 'Blog category deleted successfully');
    }
}
