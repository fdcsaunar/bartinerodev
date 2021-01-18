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
            // 'images' => 'image|required|max:5999',
            'lookingfor' => 'required',
        ]);

        $images = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                global $path;
                $filenameWithExt = $image->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $image->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $path = $image->storeAs('public/img', $fileNameToStore);
                $images[] = $fileNameToStore;
            }
        } else {
            $images[] = 'img-placeholder.png';
        }

        $posts = new Post;
        $posts->title = $request->input('title');
        $posts->category = $request->input('category');
        $posts->description = $request->input('description');
        $posts->images = json_encode($images);
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
        $posts->images = json_decode($posts->images);

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
        if (auth()->user()->id !== $posts->user_id) {
            return redirect('/dashboard')->with('error', 'Unauthorized page.');
        }
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
            // 'images' => 'required',
            'lookingfor' => 'required',
        ]);

        $images = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                global $path;
                $filenameWithExt = $image->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $image->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $path = $image->storeAs('public/img', $fileNameToStore);
                $images[] = $fileNameToStore;
            }
        }

        $posts = Post::find($id);
        $posts->title = $request->input('title');
        $posts->category = $request->input('category');
        $posts->description = $request->input('description');

        if (count($images) > 0) {
            $posts->images = json_encode($images);
        }

        $posts->lookingfor = $request->input('lookingfor');
        $posts->save();

        return redirect()->route('dashboard')
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
        if (auth()->user()->id !== $posts->user_id) {
            return redirect('/dashboard')->with('error', 'Unauthorized page.');
        }
        $posts->delete();
        return redirect()->route('dashboard')
            ->with('success', 'Post deleted.');
    }
}
