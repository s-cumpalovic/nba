<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Team;

class TeamsController extends Controller
{
    public function index() {

        $teams = Team::all();

        return view('teams.index', compact('teams'));
    }

    public function show($id) {

        $team = Team::with('player')->find($id);

        return view('teams.show', compact('team'));
    }
}
