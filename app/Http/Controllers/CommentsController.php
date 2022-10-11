<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Mail\CommentReceived;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Comment;
use Illuminate\Support\Facades\Mail;


class CommentsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('must-login');
    }

    public function store(CreateCommentRequest $request, $id) {
        $team = Team::find($id);
        $team->addComment($request->validated()['content']);

        Mail::to($team->email)->send(new CommentReceived($team));

        return redirect()->back();
    }
}
