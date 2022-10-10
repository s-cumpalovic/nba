@extends ('layouts.master')

@section('title', 'Login')

@section('content')

    <form method="POST" action="/login">

        @csrf
        
        <div class = "mb-3">
            <label class="form-label"for="">Email</label>
            <input type="text" name="email" placeholder="Your email.." class = "form-control">
        </div>
        
        <div class = "mb-3">
            <label class="form-label" for="">Password</label>
            <input type="password" name="password" class = "form-control">
        </div>
        
        @error('message')
            @include('partials.error')
        @enderror

        <button type="submit" class="btn btn-primary">Login</button>
    </form>

    <p class="mt-3 p-1 font italic">
        Don't have an account? 
        <a href="/register">Click here to sign up</a>
    </p>

@endsection