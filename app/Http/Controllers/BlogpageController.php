<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogpageController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(12);
        return view('frontend.blog-page', compact('blogs'));
    }

    public function singleblog($id)
    {
        $blog = Blog::firstWhere('id', $id);
        return view('frontend.single-blog', compact('blog'));
    }
}
