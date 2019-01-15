<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentFormRequest;
use App\Comment;

class CommentsController extends Controller
{
    public function newComment(CommentFormRequest $request)
    {
        $comment = new Comment($request->all());
        $comment->save();
        return redirect()->back()->with('status', 'your comment has been created !');
    }
}
