<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\Posts;
use App\Models\Category;
use Illuminate\Support\Facades\File;

use Str;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(5);
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Posts $request)
    {
        $requestData = $request->all();
      
        if(empty($request->is_special)){
            $requestData['is_special'] = 0;
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');             
            $imageName = time().''.$file->getClientOriginalName(); 
            $file->move('site/images/posts/',$imageName);          
            $requestData['image'] = $imageName;          
        };

        // $requestData['slug'] = \Str::slug($request->title_uz);   // POST MODELIDA FUNCTION YOZILGAN HAMMASI UCN

        $post = Post::create($requestData);
        $post->tags()->attach($request->tags);
        return redirect()->route('admin.posts.index')->with('success', "Post qo'shildi✔️");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('admin.posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.edit',compact('categories','post','tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Posts $request, Post $post)
    {   

        $requestData = $request->all();
        $data = Post::find($post->id);
       

        if ($request->hasFile('image')) {
            $path = 'site/images/posts/'. $data->image;
            if(File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');             
            $imageName = time().''.$file->getClientOriginalName(); 
            $file->move('site/images/posts/',$imageName);          
            $requestData['image'] = $imageName;          
        };
        
        // $requestData['slug'] = \Str::slug($request->title_uz);  // POST MODELIDA FUNCTION YOZILGAN HAMMASI UCN

        $post->update($requestData);
        $post->tags()->sync($request->tags);

        return redirect()->route('admin.posts.index')->with('success', "Post tahrirlandi✔️");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $delPost = Post::findOrFail($post->id);
        $status = @unlink(public_path('site/images/posts/' . $delPost->image));
         if (!$status) {
            return redirect()->route('admin.posts.index')->with($delPost->image);  // teacher.index turudi
        }
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', "Ma'lumot muvaffaqiyatli o'chirildi");
    }


    public function upload(Request $request){
        if($request->hasFile('upload')) {
            $fileName = $request->file('upload')->getClientOriginalName();
            $request->file('upload')->move('site/images/posts/',$fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName); 
            $msg = 'Rasm muvaffaqiyatli yuklandi'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }
}
