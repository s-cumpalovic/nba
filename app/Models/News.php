<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public static function paginated() {
        return self::all()->paginate(10);
    }

}
