<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function players() {

        return $this->hasMany(Player::class);
    }

    public function comments() {
        
        return $this->hasMany(Comment::class);
    }

    public function addComment($content)
    {
            $this->comments()->create([    
            'content' => $content,
            'user_id' => auth()->user()->id
            ]);
    }

}

$teams = Team::all();
return $teams->toArray();
