<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        return view('blog.index', compact('blogs'));
    }

    public function create()
    {
        $blogCategories = BlogCategory::all();

        return view('blog.create', compact('blogCategories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'blog_category_id' => ['required', 'integer', 'exists:blog_categories,id'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'photo' => ['required', 'image']
        ]);

        $file = $request->file('photo');
        $fileName = $file->getClientOriginalName();
        $destinationPath = public_path('/uploads/blog-photos/');
        $file->move($destinationPath, $fileName);

        $validated['photo'] = '/uploads/blog-photos/' . $fileName;

        $validated['created_by'] = Auth::user()->id;

        Blog::create($validated);

        return redirect()->to_route('blog.index')->with('success', 'Blog added successfully.');
    }

    public function edit(Blog $blog)
    {
        $blogCategories = BlogCategory::all();

        return view('blog.edit', compact('blog', 'blogCategories'));
    }

    public function update(Request $request,  Blog $blog)
    {
        $validated = $request->validate([
            'blog_category_id' => ['required', 'integer', 'exists:blog_categories,id'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'photo' => ['nullable', 'image']
        ]);

        
    }
}
