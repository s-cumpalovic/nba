@extends('layouts.master')

@section('title', 'NBA Teams')

@section('content')

@foreach($teams as $team)
    
    <div class="row mt-5 p-3">
        <div class="col-lg-4">
            <h2 class="text-danger bg-dark p-3 mb-3">{{$team->name}}</h2>
            <p><a class="btn btn-danger" href="{{ route('team-route', ['id' => $team->id]) }}" role="button">View details &raquo;</a></p>
            <hr class="featurette-divider">

        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

@endforeach

@endsection