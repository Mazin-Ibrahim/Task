<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use App\User;
use Session;
use App\Comment;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();


          return view('Post.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();

        $post->title = $request->title;
        $post->body  = $request->body;
        $post->user_id = Auth::user()->id;

        $post->save();

        Session::flash('suc','تم حفظ البوست بنجاح');

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $comments = Comment::where('post_id',$post->id)->get();

        return view('Post.show')->withPost($post)->withComments($comments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
     
     //return all post for one user 
    public function AllPost(){


          
          $posts = Post::where('user_id',Auth::user()->id)->get();

          return view('User.AllPosts')->withPosts($posts);


    }

    public function OnePost($id){

        $post = Post::findOrFail($id);
        

        return view('User.onePost')->withPost($post);
    }

    public function Comment(Request $request){

        $comment = new Comment();

        $comment->comment = $request->comment;
        $comment->post_id  = $request->post_id;
        $comment->user_id  = Auth::user()->id;

        $comment->save();

        Session::flash('suc','تم التعليق');

        return redirect()->back();
    }



    
}
