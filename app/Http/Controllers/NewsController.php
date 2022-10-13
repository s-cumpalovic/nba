<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Team;

class NewsController extends Controller
{
    public function index(Team $team) {
        $allnews = [];

        if($team->id) {
            $allnews = $team->news()->simplePaginate(5);
        }else {
            $allnews = News::simplePaginate(5);
        }

        return view('news.index', compact('allnews'));
    }

    public function show($id) {
        $news = News::find($id);

        return view('news.show', compact('news'));
    }
}
