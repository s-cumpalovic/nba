@extends('layouts.master')

@section('title', 'Player overview')

@section('content')

    <div class="table-responsive mt-5 p-3">
        <table class="table table-striped table-sm mt-5 p-2">
            <h2 class="text-dark mb-5 mt-5 p-3 font-weight-bold font-italic ">Player information:</h2>
            <thead>
                <tr>
                    <th class="mt-5 mb-5 p-1 text-dark">First Name</th>
                    <th class="mt-5 mb-5 p-1 text-dark">Last Name</th>
                    <th class="mt-5 mb-5 p-1 text-dark">Email</th>
                    <th class="mt-5 mb-5 p-1 text-dark">Team</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-danger">{{ $player->first_name }}</td>
                    <td class="text-danger">{{ $player->last_name }}</td>
                    <td class="text-danger">{{ $player->email }}</td>
                    <td class="text-danger">
                        <a href=" {{ route('team-route', ['id' => $player->team->id]) }}">
                        {{ $player->team->name }}
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
    </div>
@endsection