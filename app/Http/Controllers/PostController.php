<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Menampilkan semua berita di Halaman Admin
     */
    public function index()
    {
        // Ini sekarang akan berfungsi tanpa error
        $posts = Post::latest()->get(); 
        
        // Nanti akan diarahkan ke view halaman admin
        return view('admin.posts.index', compact('posts')); 
    }

    /**
     * Menampilkan form untuk membuat berita baru
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Menyimpan berita baru ke database
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            // 'image' disesuaikan dengan nama input di form
            $path = $request->file('image')->store('posts', 'public');
        }

        // Ini juga sekarang akan berfungsi tanpa error
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $path,
            'published_at' => now(),
        ]);

        return redirect()->route('admin.posts.index')->with('success', 'Berita berhasil ditambahkan.');
    }
}
