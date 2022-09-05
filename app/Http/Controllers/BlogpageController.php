<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogpageController extends Controller
{
    public function index()
    {
        $keyword = null;
        if(isset($_GET['keyword'])){
            $keyword = $_GET['keyword'];
        }

        $categories = Category::get();
        $blogs = Blog::
        when($keyword, function($query, $keyword){
            return $query->where('title', 'like', '%'.$keyword.'%');
        })
        ->paginate(12);

        // return $blogs;
        return view('frontend.blog-page', compact('blogs'));
    }

    public function singleblog($id)
    {
        $blog = Blog::firstWhere('id', $id);
        return view('frontend.single-blog', compact('blog'));
    }
}
