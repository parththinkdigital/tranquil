<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class PageController extends Controller
{
    public function about()
    {
        return view('client.pages.about');
    }

    public function faq()
    {
        return view('client.pages.faq');
    }

    public function sell()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $captcha = substr(str_shuffle($characters), 0, 6);
        session(['captcha_code' => $captcha]);

        return view('client.pages.sell', compact('captcha'));
    }

    public function contact()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $captcha = substr(str_shuffle($characters), 0, 6);
        session(['captcha_code' => $captcha]);

        return view('client.pages.contact', compact('captcha'));
    }

    public function submitContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'captcha' => 'required|string',
        ]);

        if ($request->captcha !== session('captcha_code')) {
            return back()->withErrors(['captcha' => 'Invalid CAPTCHA code. Please try again.'])->withInput();
        }

        \App\Models\Contact::create($request->only('name', 'phone', 'email', 'message'));

        return back()->with('success', 'Your message has been sent successfully!');
    }

    public function blogs()
    {
        $blogs = Blog::latest()->paginate(9);
        return view('client.blogs.index', compact('blogs'));
    }

    public function blogShow($slug)
    {
        $blog = Blog::with('category')
            ->where('slug', $slug)
            ->firstOrFail();

        // Related posts section at bottom
        $relatedBlogs = Blog::with('category')
            ->where('id', '!=', $blog->id)
            ->latest()
            ->take(3)
            ->get();

        // Latest blogs for sidebar
        $latestBlogs = Blog::with('category')
            ->where('id', '!=', $blog->id)
            ->latest()
            ->take(4)
            ->get();

        $categories = \App\Models\Category::orderBy('title')->get();

        return view('client.blogs.show', compact(
            'blog',
            'relatedBlogs',
            'latestBlogs',
            'categories'
        ));
    }
}
