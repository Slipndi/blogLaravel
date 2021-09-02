<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
       return view('posts.index',[
           'posts'=>Post::latest()->filter(request(['recherche', 'category', 'author']))->simplePaginate(6)->withQueryString()
        ]);
    }


    public function showPost(Post $post)
    {
        return view('posts.show',['post'=>$post]);
    }

}

