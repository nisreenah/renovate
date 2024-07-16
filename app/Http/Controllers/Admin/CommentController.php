<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all();
        return view('admin.comments.index', compact('comments'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        return view('admin.comments.show', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        $status = $request->get('status');
        $message = $status == 0 ? ' disabled ' : ' activated ';
        $comment->update($request->validated());

        $notification = array(
            'message' => 'Comment' . $message . 'successfully.',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.comments.index')->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        $notification = array(
            'message' => 'Comment deleted successfully.',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.comments.index')->with($notification);
    }
}
