<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\user;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $category = Category::get();
        $user = User::get();
        $post = Post::get();
        $tag = Tag::get();
        return view('admin.dashboard',compact('category','post','user','tag'));
    }   
}
