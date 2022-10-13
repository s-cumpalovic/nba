<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateNewsRequest;
use App\Models\News;
use App\Models\Team;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('must-login');
    }

    public function index(Team $team) {
        $allnews = [];

        if($team->id) {
            $allnews = $team->news()->orderBy('created_at', 'desc')->simplePaginate(5);
        }else {
            $allnews = News::orderBy('created_at', 'desc')->simplePaginate(5);
        }

        return view('news.index', compact('allnews'));
    }

    public function show($id) {
        $news = News::find($id);

        return view('news.show', compact('news'));
    }

    public function create() {
        $teams = Team::all();
        return view('news.create', ['teams' => $teams]);
    }

    public function store(CreateNewsRequest $request) {
        $validated = $request->validated();

        $news = News::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'user_id' => auth()->user()->id
        ]);

        $news->teams()->attach($request['teams']);

        session()->flash('message', 'Thank you for publishing article on www.nba.com');

        return redirect('/news');
    }
}
