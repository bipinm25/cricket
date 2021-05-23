<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function player() {
        return $this->hasMany(Player::class);
    }    

    public function point() {
        return $this->hasOne(Point::class);
    }
}
