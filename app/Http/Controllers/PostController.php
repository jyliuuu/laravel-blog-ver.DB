<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
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
        return view('admin.create',
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
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);
        $post = new Post([
            'title' => $request->get('title'),
            'content' => $request->get('content')
        ]);
        $post->save();
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
    public function edit($id): Response
    {
        $post = Post::find($id);
        return view('admin.edit',
            compact('post', 'id'));
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

        return redirect()->route('admin.index')
            ->with('success', 'Post has successfully been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id): Response
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('admin.index')->with('success', 'Post Deleted.');
    }
}
