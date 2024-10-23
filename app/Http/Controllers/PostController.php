<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show(Post $post)
    {
        return view ('posts.show', compact('post'));
    }

    public function store(Request $request)
    {
        $post = new Post();

        $post->title = $request->title;
        $post->slug = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->save();

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request,Post $post)
    {

        $post->title = $request->title;
        $post->slug = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->save();

        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}
