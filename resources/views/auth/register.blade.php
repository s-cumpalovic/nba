@extends ('layouts.master')

@section('title', 'Register')

@section('content')

    <form method="POST" action="/register">

        @csrf

        <div class = "mb-3">
            <label class="form-label"for="">Name</label>
            <input type="text" name="name" placeholder="Your name.." class = "form-control">
        </div>

        @error('name')
            @include('partials.error')
        @enderror
        
        <div class = "mb-3">
            <label class="form-label"for="">Email</label>
            <input type="text" name="email" placeholder="Your email.." class = "form-control">
        </div>
        
        @error('email')
            @include('partials.error')
        @enderror
        
        <div class = "mb-3">
            <label class="form-label" for="">Password</label>
            <input type="password" name="password" class = "form-control">
        </div>
        
        @error('password')
            @include('partials.error')
        @enderror

        <div class = "mb-3">
            <label class="form-label" for="">Password confirmation</label>
            <input type="password" name="password_confirmation" class = "form-control">
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>

@endsection