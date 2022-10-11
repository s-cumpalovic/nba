@extends('layouts.master')

@section('title', 'News')

@section('content')

    <div class="mb-5 p-2">
        <h2 class="font-weight-bold mt-3 p-1 text-danger bg-warning">{{ $news->title }}</h2>

            <h3 class="mt-3 p-1 font-weight-bold text-warning">
            </h3>
            <h3 class="mt-1 p-1 font-italic text-warning">{{ $news->content }}</h3>
            <hr class="text-warning">
            <h4 class="mt-3 p-2 font-weight-bold font-italic text-danger">About user: {{ $news->user->name }}</h4>
            <hr class="text-warning">
    </div>

    <div class="table-responsive mt-5 p-3">
        <table class="table table-striped table-sm mt-5 p-2">
            <thead>
                <tr>
                    <th class="p-1 text-warning">Name</th>
                    <th class="p-1 text-warning">Email</th>
                    <th class="p-1 text-warning">Member since:</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-danger">{{ $news->user->name }}</td>
                    <td class="text-danger">{{ $news->user->email }}</td>
                    <td class="text-danger">{{ $news->user->created_at }}</td>
                    <td class="text-danger">
                    </td>
                </tr>
                </tbody>
            </table>
    </div>

@endsection