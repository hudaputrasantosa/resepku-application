<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('dashboard', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:250',
            'description' => 'required|max:250',
            'material' => 'required',
            'making' => 'required',
            'image' => 'required',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = Auth::user()->id;
        $post->material = $request->material;
        $post->making = $request->making;

        if ($request->hasFile('image')) {
            $fotoName = time() . '.' . $request->image->extension();
            $request->image->storeAs('post/', $fotoName, 'public');
            $post->image = $fotoName;
        }

        $post->save();

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('post.detail', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
