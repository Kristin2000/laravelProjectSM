<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::latest()->simplePaginate(5);
    
        return view('posts.index',compact('posts'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $request->validate([
            'title' => 'required',
            'text' => 'required'
        ]);   

        $id = Auth::id();
        $user = User::find($id)->getOriginal();
        
        $post = new Post([
            "title" => $request->get("title"),
            "userID" => $id,
            "username" => $user["name"],
            "text" => $request->get("text")
        ]);

        $post->save();

        // Post::create($request->all());     

        return redirect()->route('posts.index')
               ->with('success','Erfolgreich gepostet!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact("post", "id"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required'
        ]); 

        $post = Post::find($id);

        $post->title = $request->get('title');
        $post->text = $request->get('text');

        $post->save();

        return redirect()->route('posts.index')
                ->with('success','Post erfolgreich geupdated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();    

        return redirect()->route('posts.index')
                ->with('success','Post wurde gelöscht.');
    }
}
