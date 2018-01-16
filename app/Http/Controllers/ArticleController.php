<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ArticleController extends Controller
{
    public function index()
    {
        $data = Post::paginate(5);
        return view('home.article.index', compact('data'));
    }

    public function show($id)
    {
        $data = Post::find($id);
        return view('home.article.list', compact('data'));
    }
}
