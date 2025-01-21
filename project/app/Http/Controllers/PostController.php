<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Models\members;
use App\Models\post;
use Illuminate\Http\Request;

use function Pest\Laravel\post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = post::with('member')->latest()->simplePaginate(10);
        return view('posts.index' , ['posts' => $posts]);
    }
    public function UserInfo($id){
        $posts=Post::find($id);
        return view('posts.info' , ['post' =>$posts]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePostRequest $request)
    {
        post::create([
            'name'=> $request->input('name') ,
            'member_id' =>2
        ]);
        return redirect('/post');
    }

    
    public function destroy(post $post)
    {
        //
    }
}
