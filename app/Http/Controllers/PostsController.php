<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::get();

        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('items.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'images' => 'required',
            'lookingfor' => 'required',
        ]);

        $posts = new Post;
        $posts->title = $request->input('title');
        $posts->category = $request->input('category');
        $posts->description = $request->input('description');
        $posts->images = $request->input('images');
        $posts->lookingfor = $request->input('lookingfor');
        $posts->user_id = auth()->user()->id;
        $posts->save();

        //$request->user()->posts()->create($request->only('title','category','description', 'images','lookingfor'));

        return redirect('/dashboard')->with('success', 'Post created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);
        
        return view('items.show')->with('post', $posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::find($id);
        return view('items.edit')->with('post', $posts);
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
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'images' => 'required',
            'lookingfor' => 'required',
        ]);
        $posts = Post::find($id);
        $posts->title = $request->input('title');
        $posts->category = $request->input('category');
        $posts->description = $request->input('description');
        $posts->images = $request->input('images');
        $posts->lookingfor = $request->input('lookingfor');
        $posts->save();

        return redirect()->route('items.index')
            ->with('success', 'Post updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::find($id);
        $posts->delete();
        return redirect()->route('items.index')
            ->with('success', 'Post deleted.');
    }
}
