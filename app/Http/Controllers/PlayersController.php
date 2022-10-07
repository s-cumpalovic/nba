<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayersController extends Controller
{
    public function show($id) {

        $player = Player::with('team')->find($id);

        return view('players.show', compact('player'));
    }
}
