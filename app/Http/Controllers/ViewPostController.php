<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Likes;
use Illuminate\Support\Facades\DB;

class ViewPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // here was my failed solution from 7/12
        //        $posts = Post::all();
        //        $likes = Likes::all();
        // here is the new method from 8/12
        $postsfull = DB::table('posts')
            ->join('likes', 'posts.id', '=', 'likes.post_id')
            ->select('posts.*', 'title', 'posts.id', 'likes')
            ->paginate(5);

        return view(
            'user.posts',
            compact('postsfull')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postfull = DB::table('posts')
            ->join('likes', 'posts.id', '=', 'likes.post_id')
            ->select('posts.*', 'title', 'content', 'posts.id', 'likes')
            ->where('posts.id', $id)
            ->get();
        //            ->first();
        return view(
            'user.view-post',
            compact('postfull', 'id')
        );
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

    public function search(Request $request)
    {
        // Get the search value from the request
        $search = $request->input('title');

        // Search in the title and body columns from the posts table
        $posts = Post::query()
            ->join('likes', 'posts.id', '=', 'likes.post_id')
            ->select('posts.*', 'title', 'posts.id', 'likes')
            ->where('title', 'LIKE', "%{$search}%")
            ->get();
        // Return the search view with the results compacted
        return view('user.search', compact('posts'));
    }
}
