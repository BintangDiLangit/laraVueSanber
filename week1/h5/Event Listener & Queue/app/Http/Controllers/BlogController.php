<?php

namespace App\Http\Controllers;

use App\Events\BlogPosted;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index() {
        $blog = Blog::get();
        return $blog;
    }
    public function store(Request $request) {
        $new_blog = Blog::create([
            'author_id' => Auth::id(),
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'content' => $request->content
        ]);
        $user = auth()->user();
        event(new BlogPosted($new_blog, $user));
        return response()->json([
            'data' => $new_blog
        ]);
    }
}
