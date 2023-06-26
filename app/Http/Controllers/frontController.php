<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class frontController extends Controller
{
    //
    public function login()
    {
        return view('pages.login');
    }

    public function blog()
    {
        $posts = Post::paginate(6);
        return view('pages.blog', compact('posts'));
    }

    public function detailpost($id)
    {
        $post = Post::find($id);
        $posts = Post::select("*")->limit(3)->get();
        return view('pages.detail_post', compact('post', 'posts'));
    }
}
