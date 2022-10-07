@extends('layouts.master')

@section('title', $team->name)

@section('content')

{{-- @dd($team) --}}

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
                @foreach($team->player as $player)
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
@endsection