<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', compact('posts'));
    }
    public function create(){
        return view('posts.create');

    }
    public function store(Request $request){
        $post = $request->validate([
            'title' => 'required',
            'content' => 'required',

        ]);

        Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content
        ]);

        return redirect()->route('posts.index');
    }
}