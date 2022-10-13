@extends('layouts.master')

@section('title', 'Publish news')

@section('content')
<div>
    <form action="/news" method="POST">
        
        @csrf
        
        <div class="mt-5 p-3 form-control bg-warning">
            <label class="form-label text-danger bg-warning p-2 font-weight-bold" for="">Title</label>
            <input type="text" name='title' class="form-control">
        </div>
        
        @error('title')
            @include('partials.error')
        @enderror
        
        <div class="mt-5 p-3 form-control bg-warning">
            <label class="form-label text-danger bg-warning p-2 font-weight-bold" for="">Content</label>
            <textarea name="content" cols="10" rows="10" class = "form-control" placeholder="Your text"></textarea>
        </div>
        
        @error('content')
        @include('partials.error')
        @enderror
        
        @foreach($teams as $team) 
        <div class="form-group form-check mt-3">
            <input
            type="checkbox"
            name="teams[{{ $team->name }}]"
            value="{{ $team->id }}"
            class="form-check-input"
            id="tag{{ $team->id }}">
            <label for="team_{{ $team->id }}" class="form-check-label text-danger bg-warning p-2 mr-1">{{ $team->name }}</label>
            
        </div>                
        @endforeach
        
        <button type="submit" class="btn btn-danger mt-5 text-warning">Publish</button>
    </form>
</div>
    
@endsection