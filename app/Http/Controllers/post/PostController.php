<?php

namespace App\Http\Controllers\post;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Http\Requests\PostValidation;
use illuminate\pagination\Paginator;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin/posts/index');
    }
    
    public function view()
    {
        $posts = Post::latest()->paginate(10);
        //$posts = Post::get();
        return view('admin.posts.view',compact('posts'));
    }
    
    public function store(PostValidation $request){
        Post::create($request->all());
        return redirect('post/view');
    }
    
    public function update(PostValidation $request, $id){        
        $post = Post::find($id);
        $post->update($request->all());
        return redirect('post/view');
    }
    
     public function edit($id)    
    {
        $posts = Post::find($id);
        return view('admin.posts.view',compact('posts'));
    }
}
