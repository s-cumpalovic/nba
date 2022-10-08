@extends ('layouts.master')

@section('title', 'Forbidden')

@section('content')
    <h2 class="mb-5 p-2 text-danger font-weight-bold">
        You must <a href="/login">login </a>to view this content..
    </h2>
@endsection