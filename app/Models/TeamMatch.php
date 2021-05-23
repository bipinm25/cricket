<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMatch extends Model
{
    protected $table = 'matches';
    use HasFactory;
    
    public function teamhome(){
        return $this->belongsTo(Team::class, 'team_id_home', 'id');
    }

    public function teamaway(){
        return $this->belongsTo(Team::class, 'team_id_away', 'id');
    }

    public function teamwinner(){
        return $this->belongsTo(Team::class, 'team_id_winner', 'id');
    }

    public function getMatchDateAttribute($value){
        return date('d/M/Y',strtotime($value));
    }
}

