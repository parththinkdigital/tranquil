<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = \App\Models\Category::latest()->paginate(10);
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:categories,title',
        ]);

        \App\Models\Category::create([
            'title' => $request->title,
            'slug' => \Illuminate\Support\Str::slug($request->title),
        ]);

        return redirect()->route('admin.category.index')->with('success', 'Category created successfully.');
    }

    public function edit(\App\Models\Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, \App\Models\Category $category)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:categories,title,' . $category->id,
        ]);

        $category->update([
            'title' => $request->title,
            'slug' => \Illuminate\Support\Str::slug($request->title),
        ]);

        return redirect()->route('admin.category.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(\App\Models\Category $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index')->with('success', 'Category deleted successfully.');
    }
}
