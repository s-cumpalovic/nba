<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Comment;

class CommentsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('must-login');
    }

    public function store(CreateCommentRequest $request, $id) {
        Team::find($id)->addComment($request->validated()['content']);

        return redirect()->back();
    }
}
