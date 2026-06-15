<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of blogs.
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blog.index', compact('blogs'));
    }
    public function create()
    {
        $categories = \App\Models\Category::all();
        return view('admin.blog.create', compact('categories'));
    }

     public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'tag'         => 'required|string|max:255',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'short_desc'  => 'required|string',
            'short_para'  => 'required|string',
            'long_desc1'  => 'required|string',
            'banner_img'  => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            'long_desc2'  => 'required|string',
            'event_date'  => 'nullable|date',
        ]);

        $data = $request->except(['image', 'banner_img']);

        // Store thumbnail image
        $data['image'] = $request->file('image')->store('blogs/thumbnails', 'public');

        // Store banner image
        $data['banner_img'] = $request->file('banner_img')->store('blogs/banners', 'public');

        Blog::create($data);

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog post created successfully.');
    }

    /**
     * Show the form for editing the specified blog.
     */
    public function edit(Blog $blog)
    {
        $categories = \App\Models\Category::all();
        return view('admin.blog.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified blog in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'tag'         => 'required|string|max:255',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'short_desc'  => 'required|string',
            'short_para'  => 'required|string',
            'long_desc1'  => 'required|string',
            'banner_img'  => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            'long_desc2'  => 'required|string',
            'event_date'  => 'nullable|date',
        ]);

        $data = $request->except(['image', 'banner_img']);

        // Update thumbnail image if new one is uploaded
        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $data['image'] = $request->file('image')->store('blogs/thumbnails', 'public');
        }

        // Update banner image if new one is uploaded
        if ($request->hasFile('banner_img')) {
            if ($blog->banner_img) {
                Storage::disk('public')->delete($blog->banner_img);
            }
            $data['banner_img'] = $request->file('banner_img')->store('blogs/banners', 'public');
        }

        $blog->update($data);

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog post updated successfully.');
    }

    /**
     * Remove the specified blog from storage.
     */
    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }
        if ($blog->banner_img) {
            Storage::disk('public')->delete($blog->banner_img);
        }

        $blog->delete();

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog post deleted successfully.');
    }
}
