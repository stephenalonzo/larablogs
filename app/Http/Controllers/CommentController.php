<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\CommentPost;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function store(CommentRequest $request, Post $post)
    {

        $request->validated();

        $post = Post::findOrFail($request->route('id'));

        $comment = Comment::create([
            'user_id' => Auth::user()->id,
            'comment' => $request->comment
        ]);

        CommentPost::create([
            'comment_id' => $comment->id,
            'post_id' => $post->id
        ]);

        return redirect(route('blog.show', $post->id))->with('comment_store_success', 'Thank you for your comment!');

    }

    public function destroy(Comment $comment)
    {
        
        $posts = CommentPost::where('comment_id', $comment->id)->get();
        
        foreach ($posts as $post)
        {
            
            Comment::destroy($comment->id); 
            return redirect(route('blog.show', $post['post_id']))->with('comment_destroy_success', 'Comment deleted successfully!');
            
        }

    }

}
