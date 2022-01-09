<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;

class CommentController extends Controller
{
    protected $validator = [
        'user' => ['required', 'string', 'max:50'],
        'body' => ['required', 'string', 'max:500'],
    ];

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validator);
        $data = $request->all();
        $post = Post::where('id', $data['post_id'])->first();
        if ($post === null) abort(404);
        $comment = Comment::create($data);
        return redirect()->route('posts.show', compact('post'));
    }
}
