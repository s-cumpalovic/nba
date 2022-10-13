@extends('layouts.master')

@section('title', 'News')

@section('content')

<h2 class="font-weight-bold mt-5 p-3 text-warning">News:</h2>
    <div class="mb-5 p-2 border border-warning">
        @foreach($allnews as $news)
        <h3 class="mt-3 p-2 font-weight-bold text-warning">
                <a class="text-warning bg-danger p-1 mb-1" href=" {{ route('news-with-users', ['id' => $news->id]) }} "{{ $news->title }}>{{ $news->title }}<a>
            </h3>
            <p class="mt-1 p-1 font-italic text-warning">{{ $news->content }}</p>
            <p class="mt-3 p-2 font-weight-bold font-italic text-danger">Posted by: {{ $news->user->name }}</p>

            @if (count($news->teams))    
                <p class="font-italic mt-3 p-2 text-warning">Sort by team:
                @foreach ($news->teams as $team)
                <li>
                    <a href="{{ route('teams-index', ['team' => $team]) }}">{{ $team->name }}</a>
                </li>
                @endforeach
            @endif
                <hr class="bg-warning">
            </p>
        @endforeach
    </div>


    <div class="pagination mb-3 p-2 text-danger bg-warning">
        {{ $allnews->links() }}
    </div>

@endsection