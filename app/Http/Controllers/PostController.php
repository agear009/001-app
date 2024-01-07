<?php

namespace App\Http\Controllers;
//import model post
use App\Models\Post;
//return type view
use Illuminate\View\View;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(): View
    {

        //get post
        $posts = post::latest()->paginate(5);
        //render view post
        return view('Posts.index',compact('posts'));
    }
}
