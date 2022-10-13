@extends('layouts.master')

@section('title', 'NBA Teams')

@section('content')


    @foreach($teams as $team)

        <div class="row mt-5 p-3 border border-warning">
            <div class="col-lg-4">
                <h2 class="text-warning bg-dark p-3 mb-3">{{$team->name}}</h2>
                <p><a class="btn btn-danger mt-5 ml-3" href="{{ route('team-route', ['id' => $team->id]) }}" role="button">View details &raquo;</a></p>
                <hr class="featurette-divider bg-warning">

            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

    @endforeach

@endsection