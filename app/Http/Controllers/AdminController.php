<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }


    public function index()
    {
        $posts = Post::get();

        return view('admin', [
            'posts' => $posts
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::get($id);

        return view('index')->with('post', $posts);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::get($id);
        
        $posts->delete();
        return redirect()->route('index')
            ->with('success', 'Post deleted.');
    }
}
