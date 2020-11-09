<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a variable $posts and store all the blog posts in it from the database
        // return a view and pass in the above variable
        
        $posts = Post::all();
        $posts = Post::orderBy('id', 'asc')->paginate(5);
        return view('posts.index')->withPosts($posts);

        // For large large datasets when you do not need to display a link for each page number when rendering your view
        $posts = Post::orderBy('id', 'asc')->simplePaginate(5);

        // $posts = DB::table('posts')->paginate(5);
        // return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //to show a form to create a new post  
        return view('posts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data 
        $this->validate($request, array(
            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255',
            'body'  => 'required'
        ));

        // store in the database
        $post = new Post;
        $post->title = $request->title;
        $post->slug  = $request->slug;
        $post->body = $request->body;
        $post->save(); 

        // Session and flash message initilaization put for something permanent in the session 
        Session::flash('success','The blog post was succesfully saved!');

        // redirect to another page 
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //to view a specific post 
        $post=Post::find($id);
        //  return view('posts.show')->withPosts('',$post);
        return view('posts.show')->withPost($post);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the database by the id number 
        $post = Post::find($id);
        //return the view 
        return view('posts.edit')->withPost($post); 
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
        // validate the data  
        $post = Post::find($id);
        if ($request->input('slug') == $post->slug) {
            $this->validate($request, array(
                'title' => 'required|max:255',
                'body'  => 'required'
            ));
        }else{
            $this->validate($request, array(
                'title' => 'required|max:255',
                'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'body'  => 'required'
            ));
        }
     

        //Save the data to the database
        $post = Post::find($id);
        
        $post->title = $request->input('title'); 
        $post->title = $request->input('slug');
        $post->body = $request->input('body');

        $post->save();
        //set flash data with success message 
        Session::flash('success','This post was Successfully updated.'); 
        
        //redirect with flash data to posts.show 
         return redirect()->route('posts.show', $post->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        Session::flash('Success', 'Post was successfully deleted');

        return redirect()->route('posts.index');

    }
}
