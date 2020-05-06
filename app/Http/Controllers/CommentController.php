<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;
use App\Post;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->body = $request->get('comment_body');
        $comment->user()->associate($request->user());
        $post = Post::find($request->get('post_id'));
        $post->comments()->save($comment);
        $url=Post::where('id',$request->get('post_id'))->value('judul');

        return redirect()->route('UserLandingForumDetail',str_replace(" ", "-", $url));
    }
    public function replyStore(Request $request)
    {
        $reply = new Comment();
        $reply->body = $request->get('comment_body');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('comment_id');
        $post = Post::find($request->get('post_id'));

        $post->comments()->save($reply);

        $url=Post::where('id',$request->get('post_id'))->value('judul');

        return redirect()->route('UserLandingForumDetail',str_replace(" ", "-", $url));

    }
}
