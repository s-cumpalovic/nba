@extends('layouts.master')

@section('title', $team->name)

@section('content')

    <h2 class="mt-5 mb-5 p-1 text-warning bg-dark font-weight bold font-italic">Team name: {{ $team->name }}</h2>
    <h2 class="mt-5 mb-5 p-1 text-warning bg-dark font-weight bold font-italic">Email: {{ $team->email }}</h2>
    <h2 class="mt-5 mb-5 p-1 text-warning bg-dark font-weight bold font-italic">Address:  {{ $team->address }}</h2>
    <h2 class="mt-5 mb-5 p-1 text-warning bg-dark font-weight bold font-italic">City:  {{ $team->City }}</h2>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th class="mt-5 mb-5 p-1 text-danger">Players:</th>
                </tr>
            </thead>
            <tbody>
                @foreach($team->players as $player)
                    <tr>
                        <td>
                            <a href=" {{ route('player-route', ['id' => $player->id]) }}">                                
                                {{ $player->first_name }}
                                {{ $player->last_name }} 
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Comments --}}

    <div class="mb-5 p-3 form-control">
        <h4 class="mb-3 p-1 font-weight-bold text-danger">Comments:</h4>
        <ul class="mb-5 p1">
            @foreach($team->comments as $comment)
                <p class="mb-1 p-1 font-italic text-danger">Posted by: {{ $comment->user->name }}</p>
                <li class="mb-2 p-1 font_weight_bold">{{ $comment->content }}</li>
                <hr>
            @endforeach
        </ul>
    </div>

    <form class="form-control" method="POST" action="/teams/{{ $team->id }}/comments">

        @csrf

        <div class = "mb-3">
            <label class="form-label"for="">Comment</label>
            <textarea class="form-control" name="content" id="" cols="10" rows="5"></textarea>
        </div>

        @error('content')
            @include('partials.error')
        @enderror

        <button type="submit" class="btn btn-primary">Publish comment</button>
    </form>

    
@endsection