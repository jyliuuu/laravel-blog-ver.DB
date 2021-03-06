<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Likes;
use Illuminate\Http\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts',
            compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response
    {
        $posts = Post::all();
        return route('admin.create',
            compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $user_id = Auth::id();
        $default_likes = 0;

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);
        $post = new Post([
            'title' => $request->get('title'),
            'content' => $request->get('content')
        ]);
        $post->save();
        $post->id;

        $like = new Likes([
            'post_id' => $post->id,
            'user_id' => $user_id,
            'likes' => $default_likes
        ]);
        $like->save();

        return redirect()
            ->route('admin.create')
            ->with('success', 'Data added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $posts = Post::find($id);
        return view('admin.edit', compact('posts', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);

        $post = Post::find($id);
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->save();

        return redirect()->route('a.posts')
            ->with('success', 'Post has successfully been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('a.posts')
        ->with('success', 'Post Deleted.');
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
