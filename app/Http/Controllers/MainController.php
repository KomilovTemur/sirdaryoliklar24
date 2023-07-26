<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use App\Models\Post;
use App\Models\Contact;
use Illuminate\Http\Request;



class MainController extends Controller
{

    public function index()
    {
        // $categories = \App\Models\Category::all();                    // AppServiceProvider dan Jonatganmiz hamma Blade fayl larga 
        $specialPosts = Post::where('is_special', 1)->limit(6)->latest()->get();
        $latestPosts = Post::limit(6)->latest()->get();
        $popularPosts = Post::limit(4)->orderBy('view','DESC')->get();   // ASC Eng kichigi DESC Eng kattasi
        return view('index', compact('specialPosts','latestPosts','popularPosts'));
    }

    public function morePosts()
    {
        $specialPosts = Post::where('is_special', 1)->limit(6)->latest()->get();
        $popularPosts = Post::limit(4)->orderBy('view','DESC')->get();
        $morePosts = Post::limit(10000000000)->latest()->get();
        return view('sections.morePosts', compact('morePosts','specialPosts','popularPosts'));
    }

    public function about()
    {
        return view('about');
    }

    public function advertising()
    {
        return view('advertising');
    }

    public function categoryPosts($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $popularPosts = Post::limit(4)->orderBy('view','DESC')->get();
        return view('categoryPosts',compact('category','popularPosts'));
    }

    public function postDetail($slug)
    {
        $post = Post::where('slug',$slug)->first();
        $post->increment('view');           // Korilganlar soni 
        $post->save();

        $otherPosts = Post::where('category_id', $post->category_id)->where('id', '!=', $post->id)->limit(3)->get();

        return view('postDetail',compact('post','otherPosts'));
    }

    public function contact()
    {
        return view('contact');
    }
    public function search(Request $request)
    {
        $ads = Ad::first();
        $key = $request->key;
        $popularPosts = Post::limit(4)->orderBy('view','DESC')->get();
        $posts = Post::where('title_uz','like', '%'.$key.'%')
                 ->orWhere('title_ru','like', '%'.$key.'%')      
                 ->orWhere('body_uz','like', '%'.$key.'%')      
                 ->orWhere('body_ru','like', '%'.$key.'%')->get();
        return view('search',compact('popularPosts','key','posts','ads'));
    }


}
