<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\TeamMatch;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    
    public function index(){

        $allteam = Team::orderBy('name')->get();
        $matches = TeamMatch::with( 'teamhome', 'teamaway', 'teamwinner')->get();        
        return view('matches', compact('matches','allteam'));
    }

    public function saveMatch(Request $request){

        $request->validate([
            'team_id_home' => 'required',
            'team_id_away' => 'required',
            'match_date' => 'required|date',
            'winner' => 'required'
        ]);       

        $winner = $request->winner;

        $match = new TeamMatch();
        $match->team_id_home = $request->home_team;
        $match->team_id_away = $request->away_team;
        $match->team_id_winner = $request->$winner;
        $match->match_date = date('Y-m-d', strtotime($request->match_date));
        $match->save();

        return redirect()->route('matches');

    }
}
