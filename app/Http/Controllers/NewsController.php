<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index() {
        $allnews = News::with('user')->simplePaginate(5);

        return view('news.index', ['allnews' => $allnews]);
    }

    public function show($id) {
        $news = News::find($id);

        return view('news.show', compact('news'));
    }
}
